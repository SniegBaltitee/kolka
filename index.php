<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/admin-panel' :
        require __DIR__ . '/views/admin-panel.php';
        break;
    case '/baptistu-baznica' :
        require __DIR__ . '/views/baznicas/baptistu-baznica.php';
        break;
    case '/archive/blog-archive' :
        require __DIR__ . '/views/archive/blog-archive.php';
        break;
    case '/detail/blog-detail?id='.$_REQUEST["id"] :
        require __DIR__ . '/views/detail/blog-detail.php';
        break;
    case '/darbalaiks' :
        require __DIR__ . '/views/static/darbalaiks.php';
        break;
    case '/archive/document-archive' :
        require __DIR__ . '/views/archive/document-archive.php';
        break;
    case '/archive/event-archive' :
        require __DIR__ . '/views/archive/event-archive.php';
        break;
    case '/detail/event-detail?id='.$_REQUEST["id"] :
        require __DIR__ . '/views/detail/event-detail.php';
        break;
    case '/archive/gallery-archive' :
        require __DIR__ . '/views/archive/gallery-archive.php';
        break;
    case '/detail/gallery-detail?id='.$_REQUEST["id"] :
        require __DIR__ . '/views/detail/gallery-detail.php';
        break;
    case '/baznicas/katolu-baznica' :
        require __DIR__ . '/views/baznicas/katolu-baznica.php';
        break;
    case '/baznicas/luteranu-baznica' :
        require __DIR__ . '/views/baznicas/luteranu-baznica.php';
        break;
    case '/baznicas/pareizticigo-baznica' :
        require __DIR__ . '/views/baznicas/pareizticigo-baznica.php';
        break;
    case '/baznicas/baptistu-baznica' :
        require __DIR__ . '/views/baznicas/baptistu-baznica.php';
        break;   
    case '/baznicas/libiesu-tautasnams' :
        require __DIR__ . '/views/static/libiesu-tautas-nams.php';
        break;
    case '/kontakti' :
        require __DIR__ . '/views/static/kontakti.php';
        break;
    case '/livu-centrs' :
        require __DIR__ . '/views/static/livu-centrs.php';
        break;
    case '/livu-simboli' :
        require __DIR__ . '/views/static/livu-simboli.php';
        break;
    case '/par-kolku' :
        require __DIR__ . '/views/static/par-kolku.php';
        break;
    case '/pamatskola' :
        require __DIR__ . '/views/static/pamatskola.php';
        break;
    case '/archive/places-archive' :
        require __DIR__ . '/views/archive/places-archive.php';
        break;
    case '/detail/places-detail?id='.$_REQUEST["id"] :
        require __DIR__ . '/views/detail/places-detail.php';
        break;
    case '/veseliba' :
        require __DIR__ . '/views/static/veseliba.php';
        break;
    case '/tautasnams' :
        require __DIR__ . '/views/static/tautasnams.php';
        break;
    case '/rekviziti' :
        require __DIR__ . '/views/static/rekviziti.php';
        break;

    case '/crud/add-document' :
        require __DIR__ . '/views/crud/add-document.php';
        break;
    case '/crud/add-place' :
        require __DIR__ . '/views/crud/add-activitie.php';
        break;
    case '/crud/add-blog' :
        require __DIR__ . '/views/crud/add-paragraph.php';
        break;
    case '/crud/add-event' :
        require __DIR__ . '/views/crud/add-event.php';
        break;
    case '/crud/add-act-category' :
        require __DIR__ . '/views/crud/add-act-category.php';
        break;
    case '/crud/add-blg-category' :
        require __DIR__ . '/views/crud/add-blg-category.php';
        break;
    case '/crud/add-gallery' :
        require __DIR__ . '/views/crud/add-gallery.php';
        break;

    case '/crud/delete-blog' :
        require __DIR__ . '/views/crud/delete-paragraph.php';
        break;
    case '/crud/delete-act-category' :
        require __DIR__ . '/views/crud/delete-act-category.php';
        break;
    case '/crud/delete-blg-category' :
        require __DIR__ . '/views/crud/delete-blg-category.php';
        break;
    case '/crud/delete-activitie' :
        require __DIR__ . '/views/crud/delete-activitie.php';
        break;

    case '/crud/edit-blog' :
        require __DIR__ . '/views/crud/edit-paragraph.php';
        break;
    case '/crud/edit-act-category' :
        require __DIR__ . '/views/crud/edit-act-category.php';
        break;
    case '/crud/edit-blg-category' :
        require __DIR__ . '/views/crud/edit-blg-category.php';
        break;
    case '/crud/edit-activitie' :
        require __DIR__ . '/views/crud/edit-activitie.php';
        break;
    case '/ship-detail' :
            require __DIR__ . '/views/ship-detail.php';
            break;
    case '/weather-detail' :
            require __DIR__ . '/views/weather-detail.php';
            break;
default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
?>