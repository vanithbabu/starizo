<?php
$file_path = '/Applications/MAMP/htdocs/starizo/wp-content/themes/starizo-theme/single-product.php';
$html = file_get_contents($file_path);

// 1. Remove everything before <main
$html = preg_replace('/^.*?(<main\b)/is', '<?php get_header(); ?>' . "\n\n" . '<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->' . "\n" . '<div class="hidden xl:block w-full">' . "\n\n" . '$1', $html);

// 2. Remove the <header> inside <main>
$html = preg_replace('/<!-- Floating Navbar.*?<\/header>/is', '', $html);

// 3. Remove the footer and everything after
$html = preg_replace('/<footer.*?$/is', '<?php get_footer(); ?>', $html);

// Also remove the mobile navbar <header id="mobile-navbar">
$html = preg_replace('/<!-- Mobile Navbar.*?<\/header>/is', '', $html);

file_put_contents($file_path, $html);
echo "Cleaned up single-product.php";
