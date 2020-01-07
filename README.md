# PHP 실습 :file_folder:
2020년 겨울방학 PHP 방과후


## 알아야 할 것
php에서 C:\Bitnami\wampstack-7.3.13-0\apache2\htdocs 가 루트


## PHP 문법
* ```<?php        ?>```
* ```echo``` 이용하여 출력
* ```;``` 으로 마무리
* 주석 : ```//```, ```/*     */```
* 변수 선언 시 타입선언 안 함.
* 변수 앞에 ```$``` 붙음.
* ```.``` 을 연결연산자로 사용함.
* 태그를 섞어 사용할 때는 ```echo``` 와 ```""```로 둘러싸야 함.


## php.ini
php 설정 파일
* display_errors = On
* log_errors = On


## 배열 선언 방법
* 구버전
  ```
  $arr = array('a', 'b', 'c', 'd', 'e');
  ```
* 최근 버전
  ```
  $arr2 = ['a', 'b', 'c', 'd', 'e'];
  ```


## 파일 처리
### 파일 읽기
1. ```$fp = fopen($file_name, 'r')```
2.  * ```fgetc($fp)``` : 한 글자씩 가져옴. while() 이용
    * ```fgets($fp)``` : 한 줄씩 가져옴. while() 이용
    * ```fread($fp, filesize($file_name))``` : 통째로 파일 가져옴.
3. fclose()
* ```file_get_contents($file_name)``` : 통째로 파일 가져옴. fopen() / fclose() 필요 없음.


### 파일 쓰기
1. ```$fp = fopen($file_name, 'w')```
2.  * ```fputs()```
    * ```fwrite($fp, contents)```
    * ```file_put_contents()```
3. ```fclose()```


### 파일 복사
```copy ( $file_name , $new_file_name )```

### 파일 삭제
```unlink($file_name)```


## post 방식
> html
```
  <form method="post" action="$php_file">
    <input type="text" name="user_id">
  </form>
```
> php
```
  $id = $_POST['user_id']
```
  

## php 에서 mysql 연동하기
```$conn = mysqli_connect('호스트이름', '아이디', '비밀번호', '사용할 데이터베이스');```


## mySQL
mysql server 실행
```
C:\Bitnami\wampstack-7.3.13-0\mysql\bin\mysqld
```


### mysql user 추가
1. 접속
  ```mysql -u아이디 -p비밀번호 사용할DB명```
2. 계정 추가
  1. 계정 생성
  > 내부계정 / 외부계정
  ```
    create user '유저이름'@'localhost' identified by '비밀번호' password expire never;
    create user '유저이름'@'%' identified by '비밀번호';
  ```
  2. 권한 부여
  > grant : 모든 권한 부여
  ```
  grant all privileges on testdb.* to '유저이름'@'localhost';
  grant all privileges on testdb.* to '유저이름'@'%';
  ```


### table
1. 데이터 삽입
  ```insert into 테이블명(필드) values(값);```
2. 데이터 수정
  ```update 테이블명 set 변경필드 = 변경할값 where 조건;```


### alter
1. 테이블 이름 변경
  ```alter table 테이블명 rename 변경테이블명;```
2. 컬럼 추가
  ```
  alter table 테이블명 add 추가컬럼명 컬럼타입 
  alter table 테이블명 add 추가컬럼명 컬럼타입 after 컬럼명;
  ```
3. 컬럼 타입변경
  ```alter table 테이블명 modify column 컬럼명 변경컬럼타입;```
4. 컬럼 이름 변경
  ```alter table 테이블명 change column 기존컬럼명 변경컬럼명 컬럼타입;```
5. 컬럼 삭제
  ```alter table 테이블명 drop column 컬럼명;```


## HTML
### form tag
사용자가 입력할 수 있는 form 제공
* 한 줄 텍스트 입력
  ```
  <input type="text" name="" value="초기값" size=12 maxlength=20>
  ```
* 비밀번호 입력
  ```
  <input type="pwd" name="">
  ```
* 여러 줄 입력
  ```
  <textarea rows="30" cols="20">초기값</textarea>
  ```
* 선택
  ```
  <input type="checkbox" name="" value="">
  <input type="radio" name="1" value="">
  <input type="radio" name="1" value="">
  ```
  > radio / checkbox 에서는 name 이 같아야 함.
  ```
  <select name="sel">
      <option value="">서울</option>
      <option value="">부산</option>
      <option value="">대전</option>
  </select>
  ```
* 파일 업로드 / 선택 시
  ```
  <input type="file" name="">
  ```
* 숨김
  ```
  <input type="hidden">
  ```
