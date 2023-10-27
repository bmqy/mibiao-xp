# 米表
小票风格的米表，魔改自：https://github.com/Laogesix/xp_mb

# 魔改内容
- 后台配置网站```logo```
- 后台配置网站```favicon```图标
- 后台配置公众号二维码
- 后台配置统计代码
- 增加```robots.txt```
- 代售列表增加```title```小提示
- 增加流水线自动部署到```FTP```
- 增加域名访问量显示

# github actions 环境变量配置
```DB_HOST``` 数据库地址  
```DB_USERNAME``` 数据库账号  
```DB_PASSWORD``` 数据库密码  
```DB_NAME``` 数据库名  
```FTP_HOST``` FTP地址  
```FTP_PORT``` FTP端口  
```FTP_USERNAME``` FTP账号  
```FTP_PASSWORD``` FTP密码  
```FTP_REMOTE_FOLDER``` FTP存储路径

# 搭建方法
- 将```sql```文件导入数据库后修改```admin\config\database.php```里面的信息
- 建议修改```sql```文件默认的管理员账号密码

## 默认信息
后台地址：```domain.com/admin```  
账号密码：```admin123```

# 推荐环境
```Nginx 1.22.1``` + ```PHP>7.4``` + ```Mysql>5.6```

# 更新记录
## v1.0
上线
