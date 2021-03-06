<?php
        require_once __DIR__ . DIRECTORY_SEPARATOR . "toolkit.php";

        session_start();
        $content = file_get_contents("struttura.html");

        setTitle($content, "Home");
        addScreenStylesheet("CSS/style_privacy.css", $content);
        initBreadcrumbs($content, "Home", "index.php");
        addBreadcrumb($content, "Privacy Policy", "");
        setUserStatus($content);
        setAdminArea($content);
        setupMenu($content, -1);
        setContentFromFile($content, "contenuto_privacy.html");
        echo($content);
?>
