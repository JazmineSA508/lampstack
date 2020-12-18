FROM mysql

ENV TZ US/Eastern
ENV MYSQL_ALLOW_EMPTY_PASSWORD no
ENV MYSQL_ROOT_PASSWORD rootpass
ENV MYSQL_USER test
ENV MYSQL_PASSWORD testpass
ENV MYSQL_DATABASE testdb

COPY ./sql /docker-entrypoint-initdb.d/

