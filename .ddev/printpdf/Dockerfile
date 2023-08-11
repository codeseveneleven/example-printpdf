FROM almogeva/puppeteer-extended:v0.5
RUN apt-get update -y && \
	apt-get upgrade -y && \
	apt-get install -y locales \
	chromium-common \
	curl \
	nginx-full \
	php-fpm \
	composer

WORKDIR /var/www/html
COPY entrypoint.sh /entrypoint.sh

COPY puppeteer-1.0.0.tar.gz /var/www/html/
COPY www.conf /etc/php/7.3/fpm/pool.d/
COPY nginx.conf /etc/nginx/

RUN tar zxvf puppeteer-1.0.0.tar.gz
RUN ln -s puppeteer-1.0.0 puppeteer

WORKDIR /var/www/html/puppeteer
RUN npm install
EXPOSE 80
STOPSIGNAL SIGQUIT

CMD ["/entrypoint.sh"]
