FROM buildkite/puppeteer:v1.15.0
LABEL maintainer="https://github.com/ivastly/docker-puphpeteer"
RUN   apt -y update && \
      apt -y install apt-transport-https lsb-release ca-certificates && \
      wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
      echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list && \
      apt -y update && \
      apt -y install php7.2 php7.2-curl php7.2-soap php7.2-sockets
RUN npm install @nesk/puphpeteer
