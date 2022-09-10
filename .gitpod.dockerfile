FROM gitpod/workspace-mysql

RUN sudo update-alternatives --set php $(which php7.4)
RUN sudo apt-get install -y php7.4-mysql
