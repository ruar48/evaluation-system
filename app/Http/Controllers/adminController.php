<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\addStudent;
use App\Models\AddCategory;
use App\Models\addQuestioner;
use App\Models\AddClass;

class adminController extends Controller
{
    public function ViewDashboard()
    {
        $studentCount = addStudent::count();
        $instructor = AddClass::count();
        $question = addQuestioner::count();

        return view('admin.dashboard', compact('studentCount', 'instructor','question'));
    }

    public function AddStudent()
    {
        return view('admin.add-student');
    }

    public function AddStudentInfo(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'idNumber' => 'required|max:255',
            'password' => 'required|max:255',
            'classCode' => 'required|max:255',

        ]);

        $hashedPassword = Hash::make($request->input('password'));

        addStudent::create([
            'name' => $request->input('name'),
            'idNumber' => $request->input('idNumber'),
            'password' => $hashedPassword,
            'classCode' => $request->input('classCode'),
        ]);

        return redirect()->route('admin.student')
            ->with('alert-success', 'Added successfully.');

    }

    public function ManageStudent()
    {
        $student = addStudent::all();

        return view('admin.manage-student', compact('student'));
    }
// delete student
    public function deleteStudent(Request $request, $id)
    {
        // Find and delete the item
        $studentDel = addStudent::findOrFail($id);
        $studentDel->delete();

        return response()->json(['message' => 'Item deleted successfully']);
    }
// end student delete

// start edit student

public function updateStudent(Request $request, $id)
{
    $studentEdit = addStudent::find($id);

    if (! $studentEdit) {
        return redirect()->back()->with('error', 'Student not found.');
    }

    $studentEdit->name = $request->name;
    $studentEdit->idNumber = $request->idNumber;
    $studentEdit->classCode = $request->classCode;

    $studentEdit->save();

    return response()->json(['message' => 'Student updated successfully']);
}

// end edit student
    public function AddClass()
    {
        return view('admin.add-class');
    }

    // add Class

    public function AddClasses(Request $request)
    {
        $request->validate([
            'classCode' => 'required|max:255',
            'instructorName' => 'required|max:255',
            'Class' => 'required|max:255',
            'Subject' => 'required|max:255',
            'schedule' => 'required|max:255',
            'no_student' => 'required|max:255',

        ]);

        addClass::create($request->all());

        return redirect()->route('admin.add-class')
            ->with('alert-success', 'Added successfully.');

    }
// end add class
// start delete class
public function deleteClass(Request $request, $id)
{
    // Find and delete the item
    $classDelete = addClass::findOrFail($id);
    $classDelete->delete();

    return response()->json(['message' => 'Item deleted successfully']);
}
// end delete class
// start edit class
public function updateClass(Request $request, $id)
{
    $classEdit = addClass::find($id);

    if (! $classEdit) {
        return redirect()->back()->with('error', 'Class not found.');
    }

    $classEdit->classCode = $request->classCode;
    $classEdit->instructorName = $request->instructor;
    $classEdit->Class = $request->className;
    $classEdit->Subject = $request->subject;
    $classEdit->schedule = $request->schedule;
    $classEdit->no_student = $request->noStudents;

    $classEdit->save();

    return response()->json(['message' => 'Class updated successfully']);
}
// end edit class
    public function ManageClass()
    {
        $class = AddClass::all();
        return view('admin.manage-class', compact('class'));
    }

    public function AddCategory()
    {
        $category = AddCategory::all();
        return view('admin.category', compact('category'));
    }

    // start add category


    public function AddCategoryName(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255',

        ]);

        AddCategory::create($request->all());

        return redirect()->route('admin.category')
            ->with('alert-success', 'Added successfully.');

    }

// end add student category

// delete category
public function deleteCategory(Request $request, $id)
{
    // Find and delete the item
    $CatDel = AddCategory::findOrFail($id);
    $CatDel->delete();

    return response()->json(['message' => 'Item deleted successfully']);
}
// end student category
// start edit category

public function updateCategory(Request $request, $id)
{
    $categoryEdit = AddCategory::find($id);

    if (! $categoryEdit) {
        return redirect()->back()->with('error', 'Category not found.');
    }
    $categoryEdit->category_name = $request->category_name;

    $categoryEdit->save();

    return response()->json(['message' => 'Category updated successfully']);
}

// end edit category
    public function AddQuestioner()
    {

        $categories = AddCategory::with('questioners')->get();
        return view('admin.questioner', compact('categories'));
    }

    // start add quest
    public function AddQuestionerCat(Request $request)
    {
        $request->validate([
            'category' => 'required|max:255',
            'questioners' => 'required|max:255',
        ]);

        addQuestioner::create($request->all());

        return redirect()->route('admin.questioner')
            ->with('alert-success', 'Added successfully.');

    }


    public function Evaluate()
    {
        return view('admin.evaluation');
    }

    public function Comments()
    {
        return view('admin.comments');
    }
}