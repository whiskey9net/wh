FROM ubuntu:20.04

SHELL ["/bin/bash", "-c"]

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get upgrade -y && apt-get install -y \
  vim \
  curl \
  wget \
  iproute2 \
  telnet \
  mysql-client

ADD init /init
ADD init_mysql1 /init_mysql1
