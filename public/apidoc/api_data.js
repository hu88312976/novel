define({ "api": [
  {
    "type": "get",
    "url": "getAdList",
    "title": "获取广告列表",
    "name": "getAdList",
    "group": "Ad",
    "version": "1.0.0",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "number",
            "optional": false,
            "field": "status",
            "description": "<p>结果状态值，0：请求失败；1：请求成功</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "info",
            "description": "<p>返回状态说明，status为0时，info返回错误原因，否则返回“OK”</p>"
          },
          {
            "group": "Success 200",
            "type": "array",
            "optional": false,
            "field": "data",
            "description": "<p>返回数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.id",
            "description": "<p>广告id</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.title",
            "description": "<p>广告标题</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.image",
            "description": "<p>广告图片</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.link_address",
            "description": "<p>广告地址</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"status\": 1,\n\"info\": \"ok\",\n\"data\": [\n{\n\"id\": 1,\n\"title\": \"广告1\",\n\"image\": \"specialty_images/1503369608_88542300.jpg\",\n\"link_address\": \"www.baidu.com\"\n}\n]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/AdController.php",
    "groupTitle": "Ad",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "404",
            "description": "<p>Not Found 接口不存在</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "404 Not Found:",
          "content": "HTTP/1.1 404 Not Found\n{\n \"message\": \"404 Not Found\",\n \"status_code\": 404\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "getAdList",
    "title": "获取广告列表",
    "name": "getAdList",
    "group": "Ad",
    "version": "1.0.0",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "number",
            "optional": false,
            "field": "status",
            "description": "<p>结果状态值，0：请求失败；1：请求成功</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "info",
            "description": "<p>返回状态说明，status为0时，info返回错误原因，否则返回“OK”</p>"
          },
          {
            "group": "Success 200",
            "type": "array",
            "optional": false,
            "field": "data",
            "description": "<p>返回数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.id",
            "description": "<p>广告id</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.title",
            "description": "<p>广告标题</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.image",
            "description": "<p>广告图片</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.link_address",
            "description": "<p>广告地址</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"status\": 1,\n\"info\": \"ok\",\n\"data\": [\n{\n\"id\": 1,\n\"title\": \"广告1\",\n\"image\": \"specialty_images/1503369608_88542300.jpg\",\n\"link_address\": \"www.baidu.com\"\n}\n]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/BookController.php",
    "groupTitle": "Ad",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "404",
            "description": "<p>Not Found 接口不存在</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "404 Not Found:",
          "content": "HTTP/1.1 404 Not Found\n{\n \"message\": \"404 Not Found\",\n \"status_code\": 404\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "getAdList",
    "title": "获取广告列表",
    "name": "getAdList",
    "group": "Ad",
    "version": "1.0.0",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "number",
            "optional": false,
            "field": "status",
            "description": "<p>结果状态值，0：请求失败；1：请求成功</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "info",
            "description": "<p>返回状态说明，status为0时，info返回错误原因，否则返回“OK”</p>"
          },
          {
            "group": "Success 200",
            "type": "array",
            "optional": false,
            "field": "data",
            "description": "<p>返回数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.id",
            "description": "<p>广告id</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.title",
            "description": "<p>广告标题</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.image",
            "description": "<p>广告图片</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.link_address",
            "description": "<p>广告地址</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"status\": 1,\n\"info\": \"ok\",\n\"data\": [\n{\n\"id\": 1,\n\"title\": \"广告1\",\n\"image\": \"specialty_images/1503369608_88542300.jpg\",\n\"link_address\": \"www.baidu.com\"\n}\n]\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/HomeController.php",
    "groupTitle": "Ad",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "404",
            "description": "<p>Not Found 接口不存在</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "404 Not Found:",
          "content": "HTTP/1.1 404 Not Found\n{\n \"message\": \"404 Not Found\",\n \"status_code\": 404\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "get",
    "url": "getCommentList",
    "title": "获取评论列表",
    "name": "getCommentList",
    "group": "Comment",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "int",
            "optional": false,
            "field": "user_id",
            "description": "<p>用户id，可传参数(2个参数必须传一个)</p>"
          },
          {
            "group": "Parameter",
            "type": "int",
            "optional": false,
            "field": "book_id",
            "description": "<p>作品id，可传参数(2个参数必须传一个)</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "number",
            "optional": false,
            "field": "status",
            "description": "<p>结果状态值，0：请求失败；1：请求成功</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "info",
            "description": "<p>返回状态说明，status为0时，info返回错误原因，否则返回“OK”</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "current_page",
            "description": "<p>当前页码</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "total",
            "description": "<p>总页数</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "per_page",
            "description": "<p>每页行数</p>"
          },
          {
            "group": "Success 200",
            "type": "array",
            "optional": false,
            "field": "data",
            "description": "<p>返回数据</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.id",
            "description": "<p>评论id</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.comment",
            "description": "<p>评论内容</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.user_id",
            "description": "<p>评论人id</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.nickname",
            "description": "<p>评论人昵称</p>"
          },
          {
            "group": "Success 200",
            "type": "int",
            "optional": false,
            "field": "data.book_id",
            "description": "<p>作品id</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.score",
            "description": "<p>作品分数</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "data.created_at",
            "description": "<p>创建时间</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"status\": 1,\n\"info\": \"ok\",\n\"data\": {\n\"current_page\": 1,\n\"data\": [\n{\n\"id\": 6,\n\"comment\": \"2\",\n\"user_id\": 1,\n\"book_id\": 1,\n\"score\": 4.2,\n\"created_at\": \"2017-09-15 10:16:13\",\n\"nickname\": \"测试昵称\"\n},\n{\n\"id\": 7,\n\"comment\": \"2\",\n\"user_id\": 2,\n\"book_id\": 1,\n\"score\": 5,\n\"created_at\": \"2017-09-15 10:15:46\",\n\"nickname\": \"苦咖啡\"\n}\n],\n\"from\": 1,\n\"last_page\": 1,\n\"next_page_url\": null,\n\"path\": \"http://book.dev/api/getCommentList\",\n\"per_page\": 10,\n\"prev_page_url\": null,\n\"to\": 2,\n\"total\": 2\n}\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/BookCommentController.php",
    "groupTitle": "Comment",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "404",
            "description": "<p>Not Found 接口不存在</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "404 Not Found:",
          "content": "HTTP/1.1 404 Not Found\n{\n \"message\": \"404 Not Found\",\n \"status_code\": 404\n}",
          "type": "json"
        }
      ]
    }
  }
] });
