# laravel-webpack
基于laravel5.4和webpack2的基本项目架构
#### 环境配置

版本：

`Composer   1.4.2`

`Node.js    7.9.0`

`npm    4.2.0`

`php: >= 5.6.4`

Composer 下载：https://getcomposer.org/download/

Node.js 下载：https://nodejs.org/download/release/v7.9.0/

#### 安装npm依赖包


    npm install

安装过程中可能会报错，可以设置代理（需翻墙）：

    npm config set proxy http://127.0.0.1:1080
    npm config set http-proxy http://127.0.0.1:1080
    npm config set https-proxy http://127.0.0.1:1080
    
删除代理：

    npm config delete http-proxy
    npm config delete https-proxy
    
#### 安装composer依赖包


    composer install

.env文件生成key命令：

    php artisan key:generate
#### 项目部署

打包前端资源：

    npm run dev
    
运行项目：

    php artisan serve

或者指定本地ip端口：

    php artisan serve --host=192.168.1.100 --port=8080

访问地址：

    http://192.168.1.100:8080/
