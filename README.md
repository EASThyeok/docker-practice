# docker-practice

<pre>
cd /home
git clone https://github.com/EASThyeok/docker-practice
cd docker-practice

docker login
docker pull asd3246/docker-pratrice
docker run -p 80:80 -v /home/docker-practice/project:/var/www/html asd3246/docker-pratrice
