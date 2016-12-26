1. 新建一个文件夹，并进入文件夹 
```bash
mkdir 20161222_git  # 创建文件夹
cd 20161222_git     # 进入创建的文件夹
```
2. 在文件夹中新建一个git仓库
```bash
git init     # 初始化仓库
```
3. 在仓库中新建一个web目录
```bash
mkdir web   # 创建web目录
```
4. 在web目录中新建文件: css/style.css、js/index.js、images/、index.php
```bash
mkdir css js images # 创建css js images 三个文件夹
cd css              # 进入css文件夹
vi style.css        # 创建style.css文件
cd ..               # 返回web目录
cd js               # 进入js文件夹
vi index.js         # 创建index.js文件
cd ..               # 返回web目录
vi index.php        # 创建index.php文件
cd ..               # 返回20161222_git
```
5. 在images文件夹下存放10张图片
6. 将web添加到仓库
```bash
git add .     # 添加到仓库
git status    # 查看仓库
```
7. 将web提交到本地仓库
```bash
git commit -m "first" # 添加到本地仓库
git log               # 查看本地仓库
```
8. 新建github仓库
9. 将本地的仓库存推送到github
```bash
git remote add origin https://github.com/openexw/homework.git   #搭建路径
git push -u origin master #将本地仓库推送到远程仓库
```
10. 制造多次提交记录
```bash
vi index.php # 更改index.php文件后再次提交
git add index.php   # 再次提交到仓库
git commit -m "two" # 再次提交到本地仓库
git push origin master #将本地仓库推送到远程仓库
```
12. 回到原来的版本，并提推送到github
```bash
git reset --hard HEAD^ #回到上一个版本
git commit -m "two" # 再次提交到本地仓库
git push origin master #将本地仓库推送到远程仓库

```
13.修改本地仓库的内容，对比修改的内容（对比单个文件和全部文件）
```bash
vi index.php #修改index.php文件
git diff    #对比修改的内容
```
14. 将修改的内容推送到github
```bash
git add index.php   # 再次提交到仓库
git commit -m "three" # 再次提交到本地仓库
git push origin master #将本地仓库推送到远程仓库
```
15. 新建一个分支dev
```bash
git branch dev # 创建一个分支dev
```
16. 切换到dev分支，创建dev目录并进入
```bash
git checkout dev # 切换到分支dev
mkdir dev        #创建dev目录
cd dev           #进人目录dev
```
17. 创建new_module目录并进入
```bash
mkdir new_module    #创建new_module目录
cd new_module       #进入new_module目录
```
18. 创建server.php、app/User.php、database/app.sql
```bash
mkdir app database  #创建文件夹app和database
vi server.php       #创建server.php文件
cd app              #进入app文件夹
vi User.php         #创建User.php文件
cd ..               #返回new_module目录
cd database         #进入database文件夹
vi app.sql          #创建app.sql文件
cd ..               #返回new_module目录
cd ..               #返回dev目录

```
19. 提交dev分支到github
```bash
git add dev             #提交到仓库
git commit -m "ststing" #提交到本地仓库
git push origin dev     #提交到远程仓库github
```
20. 将dev分支合并到master分支并推送到github
```bash
git checkout master #切换到分支master
git merge dev           #合并分支dev
git add .               #上传到仓库
git commit -m "fir"     #上传到本地仓库
git push origin master  #上传到远程仓库github
```
21. 删除dev分支并推送
```bash
git branch -d dev       #删除本地分支dev
git branch -r -d origin/dev
git push origin :dev        #删除远程仓库github里的分支dev
git add .
git commit -m "pull"    
git push origin master
```
22. 新建3个标签
```bash
git tag v.0.0.1
git tag v.0.0.2
git tag v.0.0.3

```
23. 将新建的标签推送到github
````bash
git push origin --tags
````
24. 获取第二个tag中的代码
```bash
git checkout tag_v.0.0.2
```
25. 删除github上的第一个tag
```bash
git tag -d v.0.0.1  #删除本地标签
git push origin :refs/tags/v.0.0.1
```