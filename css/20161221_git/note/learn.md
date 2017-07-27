详解github
  1. 客户端的使用
  	a. 新建项目
  		1） add 添加本地已经存在的项目
  		2） create 创建一个不存在的项目
  		3） Clone 克隆（github上已存在的项目克隆到本地）
  	b. 简单分支操作
  		1）开新分支的目的：有的新的想法，但是又不想不污染原来的代码，因此开了一个新分支
  		2) 分支的切换操作：双击或者选择
  		3）将本地的分支发布到github上：点击Publish
  	c. 合并分支
  		1）使用Merge --> 把**分支融合到**分支上
      2) 代码冲突问题 --> 根据实际情况，对冲突进行修改(删除错误标识和需要修改的代码)
      3) 合并远端分支(github上有修改，本地也有修改)
          --> Sync (变基“rebase”)
          --> 把远端的分支拉到本地，与本地的分支合并
    d. 团队协作工作流
      1）团队内部的合作、
         i. 添加写权限：Settings --> Collaborators --> confire password --> add collaborator
        ii. 开新分支（pull request的前提）
        iii. 不断实现新的功能，做成一个个新的版本
        iv. 发起“拉取请求”（Pull Request）--> 同步之前确保都已经同步
        vi. 讨论，代码审核的过程
        vii. 分支内容合并到master
      2）开源项目贡献流程
        i. fork --> 把对方的项目做一个拷贝
        ii. clone ---> 克隆到本地做修改
        iii. commit --> 提交自己的版本
        iv. Sync --> 同步到自己的远端
        v. Pull requests(拉出一个请求) --> creat pull requset--> comment(--> 项目贡献方Merge pull request --> comment)
        vi. 删除这个fork --> Settings --> Delete this repository --> 输入项目的名字确认
        注意：如果只是简单的修改，可以点进文章也，直接修改
    e. Github Issues
        1）事物卡片（issues）--> 使用场景：脑子里没有成形的代码，需要讨论的（支持Markdown语法：```语言--达到高亮效果）
        2）issues一般放的是临时性的讨论，最终都是要被删除的
        3）issues的使用技巧：
          i. 快速引用（>）：快捷键：选中那段话，r--> 这样就出现在评论框开了
          ii. 拉别人进来讨论：使用@
          iii. 用版本留言关闭Issues：在版本留言中输入fix #3
          iv. 指向和关闭功能：评论框中写入#3
   # 补：Github上的每一个项目仓库都有三套基础设置：
      1. 通过github pages建立自己的网站
      2. 开发自己的wiki，作为项目的知识库
      3. 事物卡片（issues）
    f. Github pages搭建自己的网站