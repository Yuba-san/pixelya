@font-face
{
  font-family: 'pixel-b';
  src: url("font/PixelMplus12-Bold.ttf");
  image-rendering: pixelated;
}
@font-face 
{
  font-family: 'pixel';
  src: url("font/PixelMplus12-Regular.ttf");
  image-rendering: pixelated;
}
body
{
    font-family: 'pixel-b';
    background-color: #0e0e21;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    z-index: -100;
}
.title
{
  top: -16px;
  z-index: 100;
  display: inline-block;
  background: white;
  color: #000000;
  width: 1425px;
  margin-left: -10px;
  margin-top: -16px;
  position: absolute; /*絶対位置(自分用)*/
  height: 160px;
  padding: 0;
  margin: 0;
  overflow-x: hidden;
}
.logo
{
  height:129px;
  width:138px;
  z-index: 1000;
  left: 24px;
  top: 24px;
  position: relative;
}
.header
{
  position: absolute;
  left: 250px;
  top: 30px;
  height: 115px;
  width: 1080px;
  image-rendering: pixelated;
}
/*tab設定*/
.tab {
  font-family: 'pixel-b';
  font-weight: bold;
  display: flex;
  height: 3rem;
  margin: 0 auto;
  width: 1000px;
  font-size: 40px;
  padding: 20px;
  position: absolute;
  left: 256px;
  top: 140px;
}
.tab > li {/*親階層のみ幅を25%にする*/
  width: 25%;
}
/*全てのリスト・リンク共通*/
.tab li {
  list-style: none;
  position: relative;
  z-index: 10;
}
.tab li a {
  color: white;
  display: inline-block;
  height: 3rem;
  line-height: 3rem;
  text-align: center;
  text-decoration: none;
  width: 100%;
  z-index: 10;
}
.tab li b {
  color: gray;
  display: inline-block;
  height: 3rem;
  line-height: 3rem;
  text-align: center;
  text-decoration: none;
  width: 100%;
  z-index: 10;
}
.tab li b1 {
  color: gray;
  display: inline-block;
  height: 3rem;
  line-height: 3rem;
  text-align: center;
  text-decoration: none;
  width: 100%;
  z-index: 10;
}
/*子階層以降共通*/
.tab li li {
  height: 0;
  left: -40px;
  font-size: 22px;
  overflow: hidden;
  transition: .5s;
  width: 110%;
  z-index: 10;
}
/* tab li li a 系統 */
.tab li li a 
{
  border-top: 1px solid #eee;
  z-index: 10;
}
.tab li li b 
{
  border-top: 1px solid #eee;
  border-bottom: 1px solid gray;
  z-index: 10;
}
.tab li li b1 
{
  border-top: 1px solid gray;
  z-index: 10;
}
/* tab li li a 系統終わり */
.tab li:hover > ul > li {
  height: 3rem;
  overflow: visible;
  z-index: 10;
}
/*tab設定ここまで*/
.sidebar
{
  left: 0px;
  top: 84px;
  height: 500%;
  width: 240px;
  background-color: gold;
  position: absolute;
}

.sponsorlink
{
  top: 120px;
  font-size: 14px;
  text-align: center;
  height: 14px;
  display: table;
  position: relative;
}
.sponsorimage
{
  display: inline-block;
  background-color: white;
  padding-block: 50px;
  font-size: 20px;
  left: 20px;
  top: 136px;
  position: relative;
  text-align: center;
  width: 200px;
  display: table;
}
.matome
{
  display: block;
  width: 280px;
  height: 115.6px;
  position: relative;
  padding: 0;
  margin: 0;
  z-index: 1;
  top: 400px;
}
.matome-text
{
  display: block;
  color: black;
  position: relative;
  font-size: 30px;
  text-align: center;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 32px;
  left: 0px;
  bottom: 80px;
  z-index: 2;
  height: 0;
  top: 320px;
}
.relative
{
  position: relative;
}
.tab-below-space
{
  z-index: -0;
  left: 240px;
  width: 1000px;
  bottom: 315px;
  height: 1000px;
  position: relative;
  bottom: 48px;
}
.tab-below-space-cover
{
  z-index: 100;
  position: absolute;
  top: 160px;
  width: 1000px;
  height: 240px;
}
.matome-anchor
{
  display: inline-block;
  width: 170px;
  height: 170px;
}
.image /* 日本関連の旗まとめ みたいな感じで画像を表示しているところのスタイル */
{
  display: block;
  position: relative;
  width: 170px;
  height: 170px;
  text-align: center;
  background-color: white;
  image-rendering: pixelated;
}
.image-text
{
  display: block;
  position: relative;
  top: 400px;
  color: white;
  font-size: 18px;
  text-align: center;
  height: 40px;
}
.imageanchor
{
  display: inline-block;
  position: relative;
  width: 170px;
}
.imagebase
{
  top: 400px;
  display: table-cell;
  vertical-align: middle;
  position: relative;
  background-color: white;
  padding: 5px;
  width: 170px;
  height: 170px;
}
.search
{
  position: absolute;
  top: 400px;
  left: 10px;
}
.image-ul
{
  position: relative;
  top: -300;
}
.comment
{
  position: relative;
  left: 24px;
  top: 400px;
}
.comment-title
{
  font-size: 32px;
  color: white;
  position: relative;
  left: 24px;
  top: 400px;
}
.comment-subtitle
{
  font-size: 20px;
  color: white;
  position: relative;
  left: 24px;
  top: 400px;
}
.comment-text
{
  font-family: 'pixel';
  font-size: 24px;
  color: white;
  position: relative;
  left: 24px;
  top: 400px;
}
.comment-button
{
  height: 24px;
  position: relative;
  left: 24px;
  top: 400px;
}
.comment-list
{
  height: 20px;
  position: relative;
  left: 24px;
  top: 400px;
}
