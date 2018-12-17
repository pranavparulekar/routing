# routing

Nginx Config 
-------------------
server {
        listen       80;
        server_name  routingtest.com;
        root /Users/pranavparulekar/NetBeansProjects/routing;

        #charset koi8-r;

        #access_log  logs/host.access.log  main;

        location / {
            index index.html index.php;
        try_files $uri $uri/ /index.php;
        }

    location ~ \.php$ {
     fastcgi_pass 127.0.0.1:9000;
     fastcgi_split_path_info ^(.+\.php)(/.+)$;
     #fastcgi_index index.php;
     include fastcgi_params;
     fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
    }

    }
    
hosts file
----------------
127.0.0.1 routingtest.com

URL example
-----------------
http://routingtest.com/news_news/insert/param1/param2
http://routingtest.com/news_news/display
