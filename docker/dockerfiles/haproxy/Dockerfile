FROM haproxy:2.2.1-alpine
ARG CERT_CHAIN
ARG CERT_KEY
ARG HAPROXY_NO_HTTPS
COPY ./docker/conf/haproxy/dhparam.pem /var/dhparam.pem
COPY ./docker/conf/haproxy/haproxy.cfg /usr/local/etc/haproxy/haproxy.cfg
RUN mkdir -p /var/ssl-certs && \
    echo "${CERT_CHAIN}" >> /var/ssl-certs/public-private-chain.pem && \
    echo "${CERT_KEY}" >> /var/ssl-certs/public-private-chain.pem && \
    if [ "$HAPROXY_NO_HTTPS" == 1 ]; then sed -i '/bind :443 ssl/d' /usr/local/etc/haproxy/haproxy.cfg; fi && \
    if [ "$HAPROXY_NO_HTTPS" == 1 ]; then sed -i '/http-request redirect scheme https/d' /usr/local/etc/haproxy/haproxy.cfg; fi

