<?php 

// router.php
// function route($uri) {
//     $db = db_connect();
    
//     if ($uri == '/') {
//         require 'pages/index.php';
//     } elseif ($uri == '/portfolyo') {
//         require 'pages/portfolyo.php';
//     } elseif ($uri == '/iletisim') {
//         require 'pages/iletisim.php';
//     } elseif (preg_match('/^\/blog\/(.+)$/', $uri, $matches)) {
//         $slug = $matches[1];
//         $stmt = $db->prepare("SELECT * FROM blog_posts WHERE slug = ?");
//         $stmt->execute([$slug]);
//         $post = $stmt->fetch(PDO::FETCH_ASSOC);
        
//         if ($post) {
//             require 'pages/blog-post.php';
//         } else {
//             http_response_code(404);
//             require 'pages/404.php';
//         }
//     } else {
//         http_response_code(404);
//         require 'pages/404.php';
//     }
// }
?>

<?php 

// // router.php
// function route($uri) {
//     // $db = db_connect();
    
//     if ($uri == '/') {
//         require 'oa-content/pages/index.php';
//     } elseif ($uri == '/portfolyo') {
//         require 'oa-content/pages/portfolyo.php';
//     } elseif ($uri == '/iletisim') {
//         require 'oa-content/pages/iletisim.php';
//      } 
//     //      elseif (preg_match('/^\/blog\/(.+)$/', $uri, $matches)) {
//     //     $slug = $matches[1];
//     //     $stmt = $db->prepare("SELECT * FROM blog_posts WHERE slug = ?");
//     //     $stmt->execute([$slug]);
//     //     $post = $stmt->fetch(PDO::FETCH_ASSOC);
        
//     //     if ($post) {
//     //         require 'pages/blog-post.php';
//     //     } else {
//     //         http_response_code(404);
//     //         require 'pages/404.php';
//     //     }
//     // } 
//     else {
//         http_response_code(404);
//         require 'oa-content/pages/404.php';
//     }
// }

function route($uri) {
    // $db = db_connect();
    
    // Ana sayfa için kontrol
    if ($uri == '/' || $uri == '') {
        require 'oa-content/pages/index.php';
        return;
    }

    // Diğer sabit sayfalar için kontrol
    $static_pages = ['portfolio', 'contact','blog', 'blog-detail'];
    $path = trim($uri, '/');
    if (in_array($path, $static_pages)) {
        require "oa-content/pages/{$path}.php";
        return;
    }

    // Blog post'ları için kontrol
    $stmt = $db->prepare("SELECT * FROM blog_posts WHERE slug = ?");
    $stmt->execute([$path]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($post) {
        require 'oa-content/pages/blog-post.php';
    } else {
        http_response_code(404);
        require 'oa-content/pages/404.php';
    }
}
?>