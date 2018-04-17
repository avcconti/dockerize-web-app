FROM nginx:latest

COPY default.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /www/myapp
COPY . /www/myapp

LABEL maintainer="Andrew Conti <avc.conti@gmail.com>" \ 
	version="1.0"

CMD ["nginx", "-g", "daemon off;"]
