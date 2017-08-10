FROM debian:jessie
MAINTAINER Radern <spam@radern.com>

RUN apt-get update && apt-get install -y --no-install-recommends \
		ca-certificates \
		curl \
		wget \
	&& rm -rf /var/lib/apt/lists/*

#FROM buildpack-deps:jessie-curl

RUN mkdir /apache-maven
RUN curl -fSL http://apache.mirrors.ovh.net/ftp.apache.org/dist/maven/maven-3/3.3.9/binaries/apache-maven-3.3.9-bin.tar.gz -o maven.tar.gz \
	&& tar -xvf maven.tar.gz -C apache-maven --strip-components=1 \ 
	&& rm maven.tar.gz* \
	&& sed -i '/<\/settings>/i\<localRepository>\${user.home}\/workspace\/.m2\/repository<\/localRepository>' /apache-maven/conf/settings.xml 
