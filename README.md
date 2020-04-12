# 毒鸡汤 - 壮士可要来一碗！

> 我们并不是恶意假冒www.nowsfun.com 我们只是对其代码进行了优化,脱离了数据库而单独存在,请认准官方站点www.nowsfun.com

在观察了[https://github.com/egotong/nows] 毒鸡汤原始代码后发现需要调用MySQL数据库,这样就无法直接应用于一些没有MySQL的免费PHP供应商,同样对于数据库的配置极其麻烦.

因此,我拷贝出了数据库中的内容,在经过修改后使用极其简单的php调用方式直接调用;

只要将以上代码直接扔进php环境即可使用!

相对于html静态版本，我们的唯一优点就是用户无需下载整个毒鸡汤库，免去不必要的流量 ~~其实整个库也不大 【滑稽】~~

接口调用:默认使用JS的`document.write`方式:

```javascript
echo 'document.write("'.htmlspecialchars($result).'");';
```

方式:在需要的地方来一句:

```html
<script src="api.php"></script>
```

接口是`api.php`

内容存储在`data.dat`中

同样开源!
