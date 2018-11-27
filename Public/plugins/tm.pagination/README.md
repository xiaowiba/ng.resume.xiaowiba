# tm.pagination

[在线DEMO](http://jqvue.com/demo/tm.pagination/index.html "悬停显示")  
angular分页插件tm.pagination（解决触发二次请求的问题）<br/>
根据条件查询<br/>
需要重新定义一个方法<br/>  
```javascript
$scope.paginationConf = {
            currentPage: $location.search().currentPage ? $location.search().currentPage : 1,
            totalItems: 8000,
            itemsPerPage: 15,
            pagesLength: 15,
            perPageOptions: [10, 20, 30, 40, 50],
            onChange: function(){
                console.log($scope.paginationConf.currentPage);
                $location.search('currentPage', $scope.paginationConf.currentPage);
            }
        };
```
11.21
添加href属性，保存页码，并读取页码
![image](https://github.com/317482454/tm.pagination/blob/master/1.jpg)

