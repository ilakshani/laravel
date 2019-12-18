<?php

namespace App\Http\Controllers;
use\App\Book;
use Illuminate\Http\Request;
use DB;
class BookController extends Controller
{
    

    public function Binsert(Request $request){
       // print_r($request->input());

       $book= new Book([
        'B_Name' => $request->B_Name,
        'A_Name' => $request->A_Name,
        'P_Year' => $request->P_Year,
        'description' => $request->description,
        'B_price' => $request->B_price,
        'A_Status' => true,
        'D_Status' => $request->D_Status,
        'quantity' => $request->quantity
    ]);

    error_log($book);

    



if ($book->save())
{
return ['status'=>"data has been inserted"];
}

    }

    public function Bindex(){
        //echo "from the database";
        // $data = Book::all();
        // return $data;

        $newlyaddedsql = DB::table('books')
                  
                   ->where('D_Status',0)
                   ->get();
        return $newlyaddedsql;



    }

    function deleteField(Request $request)
    {
        $id=$request->input('id');
        //$B_Name=$request->input('bookName');

        
            $table=Book::findOrFail($id)->update(['D_Status'=>1]);
            //return response()->json(['message'=>$table]);

            
            return ['status'=>"book has been deleted"];
            
            
    }

    public function displayBookList(Request $request){

        $sql = "SELECT B_Name FROM `books`";
        $bookList = DB::select(DB::raw($sql));
        return response()->json(['name'=>$bookList],200);
        

    }

    public function displayAuthorList(Request $request){

        $sql = "SELECT A_Name FROM `books`";
        $bookList = DB::select(DB::raw($sql));
        return response()->json(['name'=>$bookList],200);
        

    }

public function availability(){

    $sql = "SELECT A_Name,quantity FROM `books`WHERE 'quantity' = 1 OR 'quantity' >1 ";
        $bookList = DB::select(DB::raw($sql));
        //return $sql;
  return response()->json(['name'=>$bookList],200);
}

public function updatebook(Request $request){
    $id=$request->id;
    $book=new Book();
    $book->updatebook($id,$request->all());
    return response() -> json([
        'message' => 'successfully updated'
    ],201);
}


}
