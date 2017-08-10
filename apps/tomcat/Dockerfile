FROM debian:jessie
MAINTAINER Radern <spam@radern.com>
RUN apt-get update && apt-get install -y --no-install-recommends \
		ca-certificates \
		curl \
		wget \
	&& rm -rf /var/lib/apt/lists/*


ENV TOMCAT_MAJOR 8
ENV TOMCAT_VERSION 8.5.20
ENV TOMCAT_TGZ_URL https://www.apache.org/dist/tomcat/tomcat-$TOMCAT_MAJOR/v$TOMCAT_VERSION/bin/apache-tomcat-$TOMCAT_VERSION.tar.gz

RUN mkdir /tomcat-bin
RUN 	set -x \
        && curl -fSL "$TOMCAT_TGZ_URL" -o tomcat.tar.gz \
	&& curl -fSL "$TOMCAT_TGZ_URL.asc" -o tomcat.tar.gz.asc \
	&& tar -xvf tomcat.tar.gz -C tomcat-bin --strip-components=1 \
	&& rm tomcat-bin/bin/*.bat \
	&& rm tomcat.tar.gz*

RUN chown 1000:1000 -R /tomcat-bin
