# ThinkPHP5-mix
把laravel-mix移植到thinkPHP5中，完成前端构建和开发
# 安装
克隆项目到本地

cd到对应目录
```
yarn
```


或者

```
npm install
```

#使用

安装完Packages以后

就可以使用熟悉的命令启动了
```
npm run dev 
```
命令和laravel-mix中的一样

具体可以查看
>package.json

另外在项目中你可能需要编译不同的页面
生成不同的js或者css。

你可以配置
>webpack.mix.js

```
mix
    .js('assets/js/app.js', 'public/static/js')
   .less('assets/less/style.less', 'public/static/css')
   .browserSync({
        port:3000,
        proxy: 'tp5.app', //设置你代理的域名
        files: [
            'application/**/view/**/*.html',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
   })
   // 设置public资源的存放目录，设置打包中资源的相对读取路径
   .setPublicPath('public/static').setResourceRoot('../')
   ;

```

如果你不想使用browserSync也可以将那几行配置注释。



