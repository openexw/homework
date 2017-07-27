# git笔记初步


## linux命令

```bash
ls # 列出文件夹下的目录和文件
ls -a # 列出全部的文件，连同隐藏文件
ls -l # 列出长数据串，包含文件的属性与权限数据
cd 文件夹 #进入指定的目录
cd .. # 返回上一级
mkdir 文件夹名 # 创建一个文件夹 
pwd # 返回当前所在路径
rm t.txt # 删除t.txt文件
rm 文件夹名 -r # 删除www文件夹（递归删除）
rmdir 文件夹名 #删除文件夹
touch filename1 filename2 # 创建多个文件
```

**使用vi编辑器创建文件**

```bash
vi index.html
```
vi编辑器简单操作：

按`i`,进入编辑模式（输入内容）

按`esc`，退出编辑模式到命令模式

按`shift+:`，再输入`wq`保存并退出（编辑模式）


## git命令

```bash
# 配置git
git config --list # 查看git配置
git config --global --list # 查看git全局配置
git config --global user.email "邮箱"
git config --global user.user "用户名"

git init # 初始化git仓库（initialization）

git add 文件夹、文件名 # 把文件夹、文件名添加到本地仓库

git add . # 添加当前目录下的所有文件到仓库

git status # 查看文件状态

git log # 查看提交历史
git log -p [-num] # 查看近[num次]提交的历史，并对比差异
git log --stat #显示简要的增改行统计数

git commit -m "comment" # 提交到本地仓库
git commit --amend # 修改提交的注释内容

git diff # 查看所有修改的内容
git diff file_name # 查看file_name文件修改的内容

# 回到上一个版本
git reset --hard HEAD^ # 退回到上一个版本
git reset --hard id # 退回到未来的某个版本
git reflog # 
```
把项目中的文件提交到本地仓库：

+ 添加需要提交的文件(git add [dfg])
+ 提交文件（git commit -m "comment"）

## 添加到远程仓库
```bash
# 添加远程仓库

## 添加后远程仓库的名字叫“origin”，也可以叫其他的，但是一般都会叫origin
git remote add origin https://github.com/openexw/lear.git
# 由于远程库是空的，第一次push时加上-u参数，git会把本地master分支推送到远程,
# 还会把本地的master分支与远程的master分支关联起来，以简化下一次推送
git push -u origin master 
git push # 当前分支master推送到远程
```

### 修改远程仓库地址
```bash
git remote show # 查看远程仓库的名称
git remote show [origin] # 查看远程仓库origin的详细信息
git remote rm origin # 删除远程仓库地址
git remote add origin https://github.com/openexw/lear.git # 添加远程仓库
```

## github ssk key配置
```bash
ssh-keygen -t rsa -C "your_email@example.com"
## 连续回车

cd ~/.ssh # 进入生产ssh的目录
pwd # 查看当前路径
```
+ 打开ssh生的路径；
+ 使用文本编辑器打开`id_rsa.pub`，并复制文件中的内容；
+ 打开`https://github.com`,并找到`settings`选项（注意是你的账号的settings）；
+ 选择`SSH and GPG keys`，并选择`New SSH key`按钮；
+ 将刚才复制的内容复制到key中；
+ 最后点击`Add SSH key`按钮。

## 分支
### 理解分支
分支其实就是从某个提交对象往回看的历史。默认为master

指针

## 何时该使用分支
+ 试验性修改：测试新的算法或者为某个特别的模式重构部分代码
+ 团队协作
+ 增加新功能：为每个新功能的开发创建新的分支，完成该功能开发后，在将其合并到主分支上
+ Bug修改：修复代码中的bug，可以创建新分支来对该bug进行修改，然后将修改合并到主分支上
+ ......

## 分支相关的命令
```bash
# 查看分支
git branch

# 创建分支
git branch testing

# 切换到testing分支
git checkout testing

# 创建并切换到该分支
git checkout -b v.01

# 合并分支
## 将testing分支合并到master分支
git checkout master
git merge testing

# 删除分支
## 删除本地分支
git branch -d testing #删除名为testing的分支

## 删除远程分支
git branch -r -d origin/study  #study表示远分支名字
git push origin :study
```

**Note:**
+ 如果合并分支时产生冲突，git也不知道该如何是好，这时就需要你手动修改代码了。
+ 因为创建、合并和删除分支非常快，所以Git鼓励你使用分支完成某个任务，合并后再删掉分支，
这和直接在master分支上工作效果是一样的，但过程更安全。

## 标签
发布一个版本时，我们通常先在版本库中打一个标签（tag），这样，就唯一确定了打标签时刻的版本。
标签也是版本库的一个快照。

一个场景：

“请把上周一的那个版本打包发布，commit号是6a5819e...”

“一串乱七八糟的数字不好找！”

如果换一个办法：

“请把上周一的那个版本打包发布，版本号是v1.2”

“好的，按照tag v1.2查找commit就行！”

所以，tag就是一个让人容易记住的有意义的名字，它跟某个commit绑在一起。

### 创建标签
```bash
git tag v.0.1

# 给指定的com id打上标签
git tag v.0.9 63c1e36
```

### 查看所有的标签
```bash
git tag
```

### 操作标签
```bash
# 删除标签
git tag -d v.0.1

# 推送某个标签到远程
git push origin v.0.1
# 推送全部尚未推送的到远程服务器上的本地标签
git push origin --tags

# 获取指定标签的代码
git checkout tag_name

# 删除远程标签（已经推送到远程上了）
## 1. 删除本地标签
git tag -d v.0.1
## 2. 删除远程标签
git push origin :refs/tags/v.0.1
```

# 自定义git
## 忽略特殊文件
在git工作区的根目录下创建一个特殊的`.gitignore`文件,然后把忽略的文件名填进去。配置文件可以不用自己写，github给我们写好了 [.gitignore](https://github.com/github/gitignore)

忽略文件的原则：
+ 忽略操作系统自动生成的文件，比如缩略图等；
+ 忽略编译生成的中间文件、可执行文件等，也就是如果一个文件是通过另一个文件自动生成的，那自动生成的文件就没必要放进版本库，比如Java编译产生的.class文件；
+ 忽略你自己的带有敏感信息的配置文件，比如存放口令的配置文件。
```.gitignore
.idea/
index.php
*.ini
```
# 总结

## 任务
**任务一**：
1. 新建一个文件夹，并进入文件夹 
2. 在文件夹中新建一个git仓库
3. 在仓库中新建一个webroot目录
4. 在webroot目录中新建文件: css/style.css、js/index.js、images/、index.php
4. 将webroot添加到仓库

```bash
# 上述任务的解答
mkdir git_test 
cd git_test # 1

git init # 2

mkdir webroot # 3

cd webroot #4
mkdir css
mkdir js
mkdir images
# 进入css目录并创建style.css
cd css 
vi style.css

# 返回上一级，进入js，并创建index.js
cd ..
cd js
vi index.js

# 返回上一级，并创建index.php
cd ..
vi index.php

cd ..

git add webroot
```


**任务二（remote）**：
1. 新建一个文件夹，并进入文件夹 
2. 在文件夹中新建一个git仓库
3. 在仓库中新建一个web目录
4. 在web目录中新建文件: css/style.css、js/index.js、images/、index.php
5. 在images文件夹下存放10张图片（图片内容随便）
6. 将web添加到仓库
7. 将web提交到本地仓库
8. 新建github仓库
9. 将本地的仓库存推送到github
10. 制造多次提交记录
11. 回到上一版本，然后提交到github
12. 回到原来的版本，并提提交到github
13. 修改本地仓库的内容，对比修改的内容（对比单个文件和全部文件）
14. 将修改的内容提交到github


**任务三(branch)**：
1. 新建一个文件夹，并进入文件夹 
2. 在文件夹中新建一个git仓库
3. 在仓库中新建一个web目录
4. 在web目录中新建文件: css/style.css、js/index.js、images/、index.php
5. 在images文件夹下存放10张图片（图片内容随便）
6. 将web添加到仓库
7. 将web提交到本地仓库
8. 新建github仓库
9. 将本地的仓库存推送到github
10. 制造多次提交记录
11. 回到上一版本，然后推送到github
12. 回到原来的版本，并提推送到github
13. 修改本地仓库的内容，对比修改的内容（对比单个文件和全部文件）
14. 将修改的内容推送到github
15. 新建一个分支dev
16. 切换到dev分支，创建dev目录并进入
17. 创建new_module目录并进入
18. 创建server.php、app/User.php、database/app.sql
19. 提交dev分支到github
20. 将dev分支合并到master分支并推送到github
21. 删除dev分支并推送

**任务四(tag)**：
1. 新建一个文件夹，并进入文件夹 
2. 在文件夹中新建一个git仓库
3. 在仓库中新建一个web目录
4. 在web目录中新建文件: css/style.css、js/index.js、images/、index.php
5. 在images文件夹下存放10张图片（图片内容随便）
6. 将web添加到仓库
7. 将web提交到本地仓库
8. 新建github仓库
9. 将本地的仓库存推送到github
10. 制造多次提交记录
11. 回到上一版本，然后推送到github
12. 回到原来的版本，并提推送到github
13. 修改本地仓库的内容，对比修改的内容（对比单个文件和全部文件）
14. 将修改的内容推送到github
15. 新建一个分支dev
16. 切换到dev分支，创建dev目录并进入
17. 创建new_module目录并进入
18. 创建server.php、app/User.php、database/app.sql
19. 提交dev分支到github
20. 将dev分支合并到master分支并推送到github
21. 删除dev分支并推送
22. 新建3个标签
23. 将新建的标签推送到github
24. 获取第二个tag中的代码
25. 删除github上的第一个tag