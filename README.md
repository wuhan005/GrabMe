# GrabMe
WordPress 文章内容刮刮乐插件

## 简介
本插件可以使你在 WordPress 中实现类似萌娘百科中~~黑长直棒状~~的刮刮乐效果。
![刮刮乐](https://user-images.githubusercontent.com/12731778/47614275-32826e80-dad8-11e8-819d-4895a1fee9d3.gif)
## 使用方式
在 Release 版本下载最新版本的插件 zip 文件，在 WordPress 后台上传，之后启用就行啦~

将你需要使用刮刮乐效果的文章内容使用 `<@ @>` 标签包住。

比如：
```
<@我是刮刮乐的文本@>
```

>暂时是定为这个标签，如果你有更好的，欢迎向我提 issue

## 备注
插件里面使用了两个钩子：`wp-head` `the_content`，分别在 `<head>` 标签上添加 CSS 样式，以及使用过滤器更改文章内容。

CSS 样式来自萌娘百科。
