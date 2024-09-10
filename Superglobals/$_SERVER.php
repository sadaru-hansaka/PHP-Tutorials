<!-- $_SERVER is a PHP super global variable which holds information about 
 headers, paths, and script locations. -->
<?php
    echo "Returns the filename of the currently executing script<br>";
    echo $_SERVER['PHP_SELF']; //Returns the filename of the currently executing script
    echo "<br><br>";

    echo "Returns the version of the Common Gateway Interface (CGI) the server is using<br>";
    echo $_SERVER['GATEWAY_INTERFACE']; //Returns the version of the Common Gateway Interface (CGI) the server is using
    echo "<br><br>";

    echo "'Returns the IP address of the host server<br>";
    echo $_SERVER['SERVER_ADDR']; //Returns the IP address of the host server
    echo "<br><br>";

    echo "Returns the name of the host server<br>";
    echo $_SERVER['SERVER_NAME']; //Returns the name of the host server
    echo "<br><br>";
    
    echo "Returns the server identification string (such as Apache/2.2.24)<br>";
    echo $_SERVER['SERVER_SOFTWARE']; //Returns the server identification string (such as Apache/2.2.24)
    echo "<br><br>";

    echo "Returns the name and revision of the information protocol (such as HTTP/1.1)<br>";
    echo $_SERVER['SERVER_PROTOCOL']; //Returns the name and revision of the information protocol (such as HTTP/1.1)
    echo "<br><br>";

    echo "Returns the request method used to access the page (such as POST)<br>";
    echo $_SERVER['REQUEST_METHOD']; //Returns the request method used to access the page (such as POST)
    echo "<br><br>";

    echo "Returns the timestamp of the start of the request (such as 1377687496)<br>";
    echo $_SERVER['REQUEST_TIME']; //Returns the timestamp of the start of the request (such as 1377687496)
    echo "<br><br>";

    echo "Returns the query string if the page is accessed via a query string<br>";
    echo $_SERVER['QUERY_STRING'];
    echo "<br><br>";

    echo "Returns the Accept header from the current request<br>";
    echo $_SERVER['HTTP_ACCEPT'];
    echo "<br><br>";

    echo "Returns the Accept_Charset header from the current request (such as utf-8, ISO-8859-1)<br>";
    echo $_SERVER['HTTP_ACCEPT_CHARSET'];
    echo "<br><br>";

    echo "Returns the Host header from the current request<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br><br>";

    echo "Returns the complete URL of the current page (not reliable because not all user-agents support it)<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br><br>";

    echo "Is the script queried through a secure HTTP protocol<br>";
    echo $_SERVER['HTTPS'];
    echo "<br><br>";

    echo "Returns the IP address from where the user is viewing the current page<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br><br>";

    echo "Returns the Host name from where the user is viewing the current page<br>";
    echo $_SERVER['REMOTE_HOST'];
    echo "<br><br>";

    echo "Returns the port being used on the user's machine to communicate with the web server<br>";
    echo $_SERVER['REMOTE_PORT'];
    echo "<br><br>";

    echo "Returns the absolute pathname of the currently executing script<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br><br>";

    echo "Returns the value given to the SERVER_ADMIN directive in the web server configuration file<br>";
    echo $_SERVER['SERVER_ADMIN'];
    echo "<br><br>";

    echo "Returns the port on the server machine being used by the web server for communication<br>";
    echo $_SERVER['SERVER_PORT'];
    echo "<br><br>";

    echo "Returns the server version and virtual host name which are added to server-generated pages<br>";
    echo $_SERVER['SERVER_SIGNATURE'];
    echo "<br><br>";

    echo "Returns the file system based path to the current script<br>";
    echo $_SERVER['PATH_TRANSLATED'];
    echo "<br><br>";

    echo "Returns the path of the current script<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br><br>";

    echo "Returns the URI of the current page<br>";
    echo $_SERVER['SCRIPT_URI'];
    echo "<br><br>";
?>