<html>

    <form action="Bai4_KQ.php" method="POST">
    <h1>THUC DON</h1>
    Mon Khai Vi:
    <select name="mon_khai_vi[]" size="4" multiple="multiple">
            <option value="Goi ngo sen">Goi ngo sen </option>
            <option value="Salat ca ngu">Salat ca ngu </option>
            <option value="Bo tron rau thom">Bo tron rau thom </option>
            <option value="Thit nguoi">Thit nguoi </option>
        </select>
    Mon Chinh:
    <select name="mon_chinh[]" size="4" multiple="multiple">
            <option value="Bo ham">Bo ham </option>
            <option value="Ca chem sot ca">Ca chem sot ca </option>
            <option value="Tom rang muoi">Tom rang muoi </option>
            <option value="Cua sot me">Cua sot me </option>
        </select>
    Mon Trang Mieng:
    <select name="mon_trang_mieng[]" size="4" multiple="multiple">
            <option value="Che hat sen">Che hat sen </option>
            <option value="Banh flan">Banh flan </option>
            <option value="Rau cau">Rau cau </option>
    </select>
    <br><br>
    <button type="submit" value="submit"> Submit </button>
</form>
</html>

<style>
        body{
            text-align: center;
        }
        select{
            font-size: 1em;
            padding: 10px;
            width: auto;
        }
    </style>