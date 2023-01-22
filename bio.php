<?php

if(isset($_COOKIE['username'])) {
    echo "La valeur du cookie 'username' est: " . $_COOKIE['username'];
} else {
    echo "Le cookie 'username' n'est pas défini.";
}