# Redmine RESTful API Sample for PHP
RedmineのRESTful APIを利用しチケット(Issue)を操作する自分用のサンプル集。
https://www.redmine.org/projects/redmine/wiki/Rest_Issues

## Quick Start
### Setup
config.phpを開きRedmineが稼働しているURLと、APIを実行するユーザーのトークンをセット。
```php
<?php
// Redmineが稼働しているURL
define('END_POINT', 'https://redmine.example.com');

// APIを実行するユーザーのトークン
define('TOKEN', 'Gm76hdw6smBgMrmsrvnhvSpqv7oRzQRnles8ygrm');
```

### Do
各サンプルファイルをCLIで直接実行する。
```shellsession
$ php issue_create.php
```

## Sample List
| file  | description  |
| ----- | ----------------- |
| issue_create.php | チケットの新規作成 |

## Memo
project_idの調べ方  
https://redmine.redmine.con/issues.json?key=xxxxxxxxxxxxxxxxxxxx