# 作って学ぶ　WordPress ブロックテーマ

![作って学ぶ　WordPress ブロックテーマ](https://repository-images.githubusercontent.com/581679683/be31976d-0791-40c3-a7ab-134ce4d8bee7)

**ダウンロードデータ**

本書で作成するWordPressの完成テーマ、使用する画像素材、インポート用のコンテンツデータなどを収録しています。詳しくは、本書を参照してください。

* [サポートサイト](https://book.mynavi.jp/supportsite/detail/9784839981877.html) 
* [書籍情報](https://ebisu.com/wp-blocktheme/)

---

※最新の情報は著者NOTE（ https://ebisu.com/note/ ） や Twitter ( https://twitter.com/ebisucom ) でも出していますので、参考にしてください。

---


## ■【インポートデータ】

コンテンツのインポートデータです。

フォルダ     | ファイル     | 内容
------------ | -------------| ---------------------
import/      | contents.xml | Chapter 2（P.74）でインポートするコンテンツデータ
import/      | appendix.xml | Appendix（P.339）でインポートするコンテンツデータ

※chapter7.xmlはChapter 7で作成する固定ページ（HomeとBlog）の完成データです。必要に応じて利用してください。


### インポート手順

1. ［ツール＞インポート］でWordPressのインポーターを実行します。
2. xmlファイルを選択して「ファイルをアップロードしてインポート」をクリックします。
3. インポートする投稿者を選択し、「添付ファイルをダウンロードしてインポートする」にチェックをつけて「実行」をクリックします。
4. しばらく待ち、「すべて完了しました」と表示されたらインポート完了です。



## ■【完成テーマ】

本書で作成するテーマです。

フォルダ | テーマフォルダ    | 内容  
-------- | ---------------- | ------------------------------------------
theme/   | mytheme/         | 本書で作成するブロックテーマ
theme/   | custom-mytheme/  | Appendixで作成する子テーマ
theme/   | hybrid-mytheme/  | ハイブリッドテーマPDFで作成するテーマ



## ■【デモ】

本書で作成するブログサイトを静的生成してデプロイしたものです。

* https://wordpress-blocktheme-demo.pages.dev/


## ■【画像データ】

フォルダ | 内容 
-------- | -----------------------------------
images/  | ブログサイトで使用する画像データ



## ■【ハイブリッドテーマPDF】hybrid.pdf

ハイブリッドテーマの作成についてまとめたPDFです。



## ■【Figmaのデザインデータ】

Figmaで作成したデザインデータです。Figmaにインポートして利用してください。

フォルダ | ファイル＆フォルダ | 内容
-------- | ------------------ | --------------------------------------------
Figma/   | wp-blocktheme.fig  | Figmaのデザインデータ
Figma/   | export/            | Figmaのデザインデータを画像として出力したもの

### インポート手順

1. Figmaのファイルブラウザ（ファイルの一覧が表示される画面）を開きます。

2. 「ファイルをインポート」をクリックしてfigファイルを選択するか、ファイルブラウザにfigファイルをドラッグ＆ドロップします。

詳しくは下記を参照してください。

* [Figmaへのファイルのインポート – Figma ヘルプセンター](https://help.figma.com/hc/ja/articles/360041003114-Figma%E3%81%B8%E3%81%AE%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%81%AE%E3%82%A4%E3%83%B3%E3%83%9D%E3%83%BC%E3%83%88)



## ■ ブログサイトのコンテンツについて

ブログサイトのコンテンツは、日本語に特化したrinna株式会社のGPT言語モデル（rinna/japanese-gpt-1b）を使用して生成した文章を編集したものです。

* [rinna/japanese-gpt-1b](https://huggingface.co/rinna/japanese-gpt-1b) ［[License](https://huggingface.co/rinna/japanese-gpt-1b#licenese)］


-----------------------------------------------

## ■ ご利用にあたって

本書に記載されている内容や本ダウンロードデータの運用によって、いかなる損害が生じても、株式会社マイナビ出版および著者は責任を負いかねますので、あらかじめご了承ください。

（c）2023 EBISUCOM / マイナビ出版
