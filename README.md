If you want to create a custom php project with multi language. This repository will be a good boilar plate for that.

#if you want to run it in Xampp / Wampp
```````
http://localhost/
```````

#If you want to run it in Docker

If you want to use the docker container then the docker-compose.yml and Dockerfile also available
### Step 1
`````
docker run --rm -it httpd:2.4 cat /usr/local/apache2/conf/httpd.conf > httpd.conf
`````

##Step 2 build the project wish docker container:
```````
docker-compose build
``````

## Step3: start the project with docker container:
```````
docker-compose up -d
``````

### Step4: http://localhost:8888/

##To stop the project with docker container:
```````
docker-compose down -d
``````

