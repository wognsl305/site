<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>
         <h1>회원가입</h1>
         <form action="php25-insert.php">
            <label for="userName">이름</label>
            <input type="input" id="userName" name="userName" placeholder="이름입력"><br>

            <label for="userID">ID</label>
            <input type="input" id="userID" name="userID" placeholder="ID입력"><br>

            <label for="userPW">PW</label>
            <input type="input" id="userPW" name="userPW" placeholder="비밀번호 입력"><br>

            <label for="userGender">성별</label>
            <select name="userGender" id="userGender">
               <option value="m">남성</option>
               <option value="w">여성</option>
            </select>

            <label for="userEmail">이메일</label>
            <input type="Email" id="userEmail" name="userEmail" placeholder="이메일 입력"><br>

            <input type="submit" value="가입하기"/>
         </form>
</body>
</html>