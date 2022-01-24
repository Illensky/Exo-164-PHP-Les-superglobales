<?php

/**
 * A l'aide de la documentation officielle de PHP.
 * 1. Retrouvez la page traitant des superglobales pour $_SERVER
 * 2. Récupérez un maximum de valeurs de ce tableau et affichez les à l'aide d'un simple echo ( il n'est pas interdit d'être intelligent, c'est un tableau associatif... )
 * 3. Uploadez ce projet sur votre serveur et testez !
 */
// TODO Votre code ici

echo "<pre>";
echo "Fichier script en cours d'exercution :".$_SERVER['PHP_SELF'];
echo "Tableau arguments script :".$_SERVER['argv'];
echo "Nombre parametre ligne commande script :".$_SERVER['argc'];
echo "Numéro de récision de l'interface CGI :".$_SERVER['GATEWAY_INTERFACE'];
echo "Adresse IP du serveur :".$_SERVER['SERVER_ADDR'];
echo "Nom du serveur :".$_SERVER['SERVER_NAME'];
echo "Chaine d'identification du serveur :".$_SERVER['SERVER_SOFTWARE'];
echo "Nom et revision du protocole de com :".$_SERVER['SERVER_PROTOCOL'];
echo "Methode utilisée pour arriver sur la page :".$_SERVER['REQUEST_METHOD'];
echo "Unix du début de la requette :".$_SERVER['REQUEST_TIME'];
echo "Timestamp du début de la requette :".$_SERVER['REQUEST_TIME_FLOAT'];
echo "Chaine de requette :".$_SERVER['QUERY_STRING'];
echo "Racine sous la quelle le script est exécuté :".$_SERVER['DOCUMENT_ROOT'];
echo "Contenu de l'entete accept :".$_SERVER['HTTP_ACCEPT'];
echo "Contenu de l'entete Accept Charset :".$_SERVER['HTTP_ACCEPT_CHARSET'];
echo "Contenu de l'entete Accept Encoding :".$_SERVER['HTTP_ACCEPT_ENCODING'];
echo "Contenu de l'entete Accept Language :".$_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "Contenu de l'entete connection :".$_SERVER['HTTP_CONNECTION'];
echo "Contenu de l'entete Host :".$_SERVER['HTTP_HOST'];
echo "Adresse de la page qui as conduit a la page courante :".$_SERVER['HTTP_REFERER'];
echo "Contenu de l'entete User Agent :".$_SERVER['HTTP_USER_AGENT'];
echo "HTTPS ON or OFF :".$_SERVER['HTTPS'];
echo "Adresse IP du client :".$_SERVER['REMOTE_ADDR'];
echo "Nom de l'hote qui lit le script courrant :".$_SERVER['REMOTE_HOST'];
echo "Port utilisé par le client :".$_SERVER['REMOTE_PORT'];
echo "L'utilisateur authentifié :".$_SERVER['REMOTE_USER'];
echo "L'utilisateur authentifié si la requete as etait redirigée en interne :".$_SERVER['REDIRECT_REMOTE_USER'];
echo "Chemin absolu vers le fichier contenant le script :".$_SERVER['SCRIPT_FILENAME'];
echo "Valeur donner a la directive SERVER_ADMIN :".$_SERVER['SERVER_ADMIN'];
echo "Le port com utilisé par le serveur :".$_SERVER['SERVER_PORT'];
echo "Chaine contenant le numero de version du serveur et le nom d'hoste virtuel :".$_SERVER['SERVER_SIGNATURE'];
echo "Chemin dans e sustéme de fichier jusqu'au script courant :".$_SERVER['PATH_TRANSLATED'];
echo "Nom du script courant :".$_SERVER['SCRIPT_NAME'];
echo "URI fournit pour acceder a cette page :".$_SERVER['REQUEST_URI'];
echo "Variable définie dans l'entete 'Authorization' sous HTTP Digest:".$_SERVER['PHP_AUTH_DIGEST'];
echo "Variable définie a l'utilisateur fournit par l'utilisateur sous HTTP :".$_SERVER['PHP_AUTH_USER'];
echo "Variable contenant le MDP fournit par l'utilisateur sous HTTP :".$_SERVER['PHP_AUTH_PW'];
echo "Type d'identification sous HTTP :".$_SERVER['AUTH_TYPE'];
echo "Contient les info sur le nom du chemin fourni par le client :".$_SERVER['PATH_INFO'];
echo "Version originale de PATH INFO avant analyse PHP :".$_SERVER['ORIG_PATH_INFO'];
echo "</pre>";