<div class="fut-admissions">
    <h2>Добавление кабинета</h2>
    <div class="add-patient">
        <form method="post">
            <label>Название кабинета <input type="text" name="Office"></label>
            <button>Добавить</button>
        </form>
    </div>
</div>
<style>
h2{
   text-align: center; 
   margin-top: 30px;
   font-family: sans-serif;
   font-weight: 750;
   color: #6c0000;
}
form{
   display: flex;
   flex-direction: column;
   gap: 15px;
   padding: 30px 0;
   background: antiquewhite;
   padding: 40px;
   margin-top: 30px;
   border-radius: 15px;
   font-family: sans-serif;
   font-weight: 750;
   color: #6c0000;
   box-shadow: 0 5px 20px black;
}
input{
   display: flex;
   justify-content: space-evenly;
   border: none;
   border-bottom: 3px solid;
   width: 400px;
   background: none;
   outline: none;
}
button{
   font-family: sans-serif;
   font-weight: 750;
   padding: 10px 0;
   border-radius: 10px;
   border: none;
   background: #6c0000;
   color: #fff;
}
</style>