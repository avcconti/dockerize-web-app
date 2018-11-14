FROM amazonlinux:1

RUN yum clean all && yum update -y && yum install -y \
sudo

RUN yum install -y \
php56 \
nginx install \
nmap

RUN mkdir -p /www/myapp
WORKDIR /www/myapp

LABEL maintainer="Andrés Velasco <avc.conti@gmail.com>" \
      version="1.0"

COPY . .

COPY docker_assets/myapp.conf /etc/nginx/conf.d/
COPY docker_assets/nginx.conf /etc/nginx/

RUN ln -sf /dev/stdout /var/log/nginx/access.log
RUN ln -sf /dev/stderr /var/log/nginx/error.log
VOLUME ["/www/myapp"]
CMD ["nginx", "-g", "daemon off;"]
