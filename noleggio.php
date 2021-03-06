<?php
        require_once __DIR__ . DIRECTORY_SEPARATOR . "toolkit.php";

        session_start();
        // Importa la struttura generale del sito
        $content = file_get_contents(__("struttura.html"));

        initBreadcrumbs($content, "Home", "index.php");
        if ($_SESSION['language']=='en'){
                setTitle($content, "Instrumentation Rental");
                addBreadcrumb($content, "Instrumentation Rental", "");
        }else{
                setTitle($content, "Noleggio Strumentazione");
                addBreadcrumb($content, "Noleggio Strumentazione", "");
        }
        setUserStatus($content);
        setupMenu($content, 2);
        setAdminArea($content);
        setLangArea($content, "noleggio.php");
        setContentFromFile($content, __("contenuto_noleggio.html"));
        echo($content);
?>
