FROM alpine:3.17

ARG APP_DIR="/product/genshin/www"

RUN apk add --update \
    nginx \
    openssl

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

# Install nginx configurations
COPY nginx.conf /etc/nginx/
COPY genshin.conf /etc/nginx/conf.d/default.conf

RUN echo "upstream php-upstream { server genshin_php:9001; }" > /etc/nginx/conf.d/upstream.conf

WORKDIR ${APP_DIR}

CMD ["nginx"]