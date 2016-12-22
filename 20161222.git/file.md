
#内容4的作业
###1.新建一个文件夹，并进入文件夹
```bash  
   mkdir 20161222_git  
    cd  20161222_git
```
###2.在文件夹中新建一个git仓库
```bash  
  mkdir git  
  cd git 
```
###3.在仓库中新建一个web目录
```bash  
  mkdir web  
  cd web 
```
###4.在web目录中新建文件: css/style.css、js/index.js、images/、index.php
```bash  
（1）
  mkdir css js images  
  vi index.php
   i键 #插入
   esc键 #退出插入
   shift键+冒号 输入wq键 #保存退出index.php文件
（2）
   cd css
   touch stuch style.css
   cd ..
   cd js
   touch index.js
   cd ..
```
###5.在images文件夹下存放10张图片（图片内容随便）
```bash  
  cd images  
  在该文件夹放入10张图片
  cd ..
  git init #初始化仓库git
```
###6.将web添加到仓库
```bash  
  git add .  
  git status 
```
###7.将web提交到本地仓库
```bash  
  git commit -m"file"  
  git log 
```
###8.新建github仓库
```bash  
  github.com #网址 
```
###9.将本地的仓库存推送到github
```bash  
  git remote add aaa https//:  
  git push aaa master 
```
###10.制造多次提交记录
```bash  
  制造多次提交记录
```
###11.回到上一版本，然后推送到github
```bash  
  git reset --hard HEAD^  
```
###12.回到原来的版本，并提推送到github
```bash  
  git reset --hard HEAD^   
  git remote add aaa https//:  
  git push aaa master 
```
###13.修改本地仓库的内容，对比修改的内容（对比单个文件和全部文件）
```bash  
  cd css 
  vi style.css
  i
  esc
  shift+:
  wq
  cd ..
```
###14. 将修改的内容推送到github
```bash  
  git add .  
  git commit -"file2"  
  git push aaa master 
```
###15.新建一个分支dev
```bash  
  git branch dev  
```
###16.切换到dev分支，创建dev目录并进入
```bash  
  git checkout  dev  
  git branch  
```
###17.创建new_module目录并进入
```bash  
  mkdir new_module  
  cd  new_module
```
###18.创建server.php、app/User.php、database/app.sql
```bash  
  (1）
    mkdir app database  
    vi server.php
     i键 #插入
     esc键 #退出插入
     shift键+冒号 输入wq键 #保存退出server.php文件
  （2）
     cd app
     touch stuch User.php
     cd ..
     cd database
     touch app.sql
     cd ..
```
###19.提交dev分支到github
```bash  
  git add .  
  git commit -m"file3"  
  git push aaa dev 
```
###20.将dev分支合并到master分支并推送到github
```bash  
  git checkout master  
  git merge dev  
  git push aaa master 
```
###21.删除dev分支并推送
```bash  
  git branch -D dev  
  git push aaa master  
```
###22. 新建3个标签
```bash  
  git tag ---v0.1    
```