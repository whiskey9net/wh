FROM php:7.2-apache

SHELL ["/bin/bash", "-c"]

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get upgrade -y && apt-get install -y \
  vim \
  curl \
  wget \
  iproute2 \
  telnet

RUN docker-php-ext-install mysqli

