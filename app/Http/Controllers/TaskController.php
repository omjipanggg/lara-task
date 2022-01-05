<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {
	public function show() {
		$td = Task::orderBy('created_at', 'desc')->get();
		$context = [
			'title' => 'Tasks',
			'data' => $td,
		];
		return view('task-list', $context);
	}

	public function create(Request $request) {
		Task::create([
			'title' => $request->title,
			'body' => '',
		]);
		return back()->with('status', 'Task added successfully...');
	}

	public function edit(Request $request) {
		$context = [
			'title' => 'Tasks: Edit',
			'data' => Task::find($request->id),
		];
		return view('task-edit', $context);
	}

	public function update(Request $request) {
		Task::where('id', $request->id)->update([
			'title' => $request->title,
			'body' => $request->body,
			'is_done' => $request->is_done,
		]);
		return redirect('tasks')->with('status', 'Task updated successfully...');
	}

	public function delete(Request $request) {
		Task::find($request->id)->delete();
		return back()->with('status', 'Task deleted successfully...');
	}
}

?>