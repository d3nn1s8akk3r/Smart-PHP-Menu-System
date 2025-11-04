<?php
// =====================================================
// SMART MENU: Dynamic + Configurable Static + Separator
// =====================================================

function generate_menu() {
    $file = file_get_contents(__FILE__);

    // === CONFIG: ENABLE / DISABLE STATIC ITEMS ===
    $enable_static_items = true;  // <<<<< SET TO false TO HIDE ALL STATIC ITEMS

    // === 1. STATIC MENU ITEMS (edit this array) ===
    $static_items = [
        ['label' => 'Home',      'href' => 'index.php'],  // Links to root
        ['label' => 'Blog',      'href' => 'blog.php'],
        ['label' => 'Privacy',   'href' => 'privacy.php'],
        // Add more as needed
    ];

    // === 2. DYNAMIC: Find <section id="menu_..."> ===
    preg_match_all('/<section\s[^>]*id=["\']menu_([^"\']+)["\'][^>]*>/i', $file, $matches);

    // === 3. Active state (from cookie set by JS) ===
    $active_id = $_COOKIE['active_section'] ?? '';
    $current_path = $_SERVER['REQUEST_URI'];
    $is_home = (basename($current_path) === 'index.php' || $current_path === '/');

    $menu_html = '<ul class="site-menu">' . PHP_EOL;

    // === 4. DYNAMIC ITEMS FIRST ===
    foreach ($matches[1] as $slug) {
        $id = 'menu_' . $slug;
        $label = ucwords(str_replace(['-', '_'], ' ', $slug));
        $active = ($id === $active_id) ? ' class="active"' : '';
        $menu_html .= "    <li><a href=\"#$id\"$active>$label</a></li>" . PHP_EOL;
    }

    // === 5. VISUAL SEPARATOR (only if both groups exist) ===
    $has_dynamic = !empty($matches[1]);
    $has_static = $enable_static_items && !empty($static_items);

    if ($has_dynamic && $has_static) {
        $menu_html .= "    <li class=\"menu-separator\"><hr></li>" . PHP_EOL;
    }

    // === 6. STATIC ITEMS LAST (only if enabled) ===
    if ($enable_static_items) {
        foreach ($static_items as $item) {
            $href = $item['href'];
            $label = $item['label'];
            $target = isset($item['target']) ? ' target="' . $item['target'] . '"' : '';

            // Active logic for static items
            $active = '';
            if ($href === 'index.php' && $is_home) {
                $active = ' class="active"';
            } elseif (strpos($href, '#menu_') === 0 && $href === '#' . $active_id) {
                $active = ' class="active"';
            } elseif (strpos($current_path, basename($href)) !== false) {
                $active = ' class="active"';
            }

            $menu_html .= "    <li><a href=\"$href\"$target$active>$label</a></li>" . PHP_EOL;
        }
    }

    $menu_html .= '</ul>' . PHP_EOL;

    return $menu_html;
}
?>
