git任务四作业：git标签的相关操作

```bash


# 新建一个文件夹，并进入文件夹 
cd /g                  #进入g盘
mkdir xkx              #创建一个test文件夹
cd xkx                 #进入test文件夹



# 在文件夹中新建一个git仓库
git init               #建立一个git仓库



# 在仓库中新建一个web目录
mkdir web              #建立一个web文件夹



# 在web目录中新建文件: css/style.css、js/index.js、images/、index.php
cd web                 #进入web文件夹
mkdir css js images    #创建css、js、images文件夹
touch index.php        #创建index.php文件



# 将web添加到仓库
cd ..                  #退出到xkx文件夹
git add web            #把web文件夹添加到仓库



# 将web提交到本地仓库
git commit -m "提交"   #将添加的文件提交的仓库并注释为“提交”



# 新建github仓库
git remote add origin https://github.com/openexw/homework.git     
#添加origin的github地址


# 将本地的仓库存推送到github
git push origin master  #将本地仓库用master分支推送到github上



# 制造多次提交记录
cd web                  #进入web文件夹
vi index.php            #进入vi编辑器编辑index.php文件的内容
git add .               #将所有文件添加到本地仓库
git commit -m "提交2"   #进行第二次提交



# 回到上一版本，然后推送到github
git reset --hard HEAD^  #返回上一版本
git push origin master  #将这一版本推送到github上



# 回到原来的版本，并提推送到github
git reset --hard 2a92b3c    #输入原版本的ID返回到原版本
git push origin master      #将原版本推送到github上



# 修改本地仓库的内容，对比修改的内容（对比单个文件和全部文件）
vi index.php            #修改内容
git log -p -2           #对比原2个版本的修改内容



# 将修改的内容推送到github
git add .                   #把修改后的文件添加到本地仓库
git commit -m "提交3"       #提交修改后的文件
git push origin master      #将文件夹推送到github上



# 新建一个分支dev
git branch dev          #建立dev分支



#切换到dev分支，创建dev目录并进入
git checkout dev        #切换到dev分支
mkdir dev               #建立dev目录
cd dev                  #进入dev目录



# 创建new_module目录并进入
mkdir new_module        #建立new_module目录
cd new_module           #进入



# 创建server.php、app/User.php、database/app.sql
mkdir app database      #建立app、database文件夹
touch server.php        #建立server.php文件
cd app                  #进入app
touch User.php          #建立User.php文件
cd ..                   #返回上一级
cd database             #进入文件夹
touch app.sql           #建立app.sql文件



# 提交dev分支到github
cd ..                      #返回到new_module目录
git add .                  #把所有文件添加到本地仓库
git commit -m "dev提交"    #把文件提交到仓库
git push origin dev        #使用dev分支把仓库文件推送到github上



# 将dev分支合并到master分支并推送到github
git checkout master        #切换到master分支上
git merge dev              #合并master分支和dev分支
git push origin master     #推送到github上



# 删除dev分支并推送
git branch -d dev                 #删除dev分支
git branch -r -d origin/dev       #删除远程仓库的dev分支
git push origin :dev              #推送到github上



# 新建3个标签
git tag v.0.1           #创建第一个标签
git tag v.0.2           #创建第二个标签
git tag v.0.3           #创建第三个标签



# 将新建的标签推送到github
git push origin --tags      #将所有未推送的标签推送到github上



# 获取第二个tag中的代码
git checkout v.0.2      #获取第二个tag中的代码



# 删除github上的第一个tag
git push origin :refs/tags/v.0.1           #删除github上的第一个tag


```