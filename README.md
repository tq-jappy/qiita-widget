# Qiita Widget

![](https://raw.github.com/suin/qiita-widget/master/image.png)

→ [Qiita Widgetのコードを取得する](http://qiita-widget.suin.org/)

## ビルド

nodebrewとnodeをインストール

```
$ curl -L git.io/nodebrew | perl - setup
```

``~/.nodebrew/current/bin`` にPATHを通す

nodeをインストール

```
$ nodebrew install-binary v0.11.13
```

recess, coffee-script, uglify-jsをグローバルインストール

```
$ npm -g install recess
$ npm -g install coffee-script
$ npm -g install uglify-js
```

コンパイル

```
$ ./compile.php > script.js
```

## 使い方

```html
<a class="qiita-timeline" href="https://qiita.com/users/{ユーザ名}" data-qiita-username="{ユーザ名}">{ユーザ名}のtips</a>
<script src="http://rawgithub.com/suin/qiita-widget/master/script.js"></script>
```

## License

MIT License
