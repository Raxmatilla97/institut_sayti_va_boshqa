<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTest2Request;
use App\Http\Requests\UpdateTest2Request;
use App\Repositories\Test2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Test2Controller extends AppBaseController
{
    /** @var  Test2Repository */
    private $test2Repository;

    public function __construct(Test2Repository $test2Repo)
    {
        $this->test2Repository = $test2Repo;
    }

    /**
     * Display a listing of the Test2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $test2s = $this->test2Repository->paginate(10);

        return view('test2s.index')
            ->with('test2s', $test2s);
    }

    /**
     * Show the form for creating a new Test2.
     *
     * @return Response
     */
    public function create()
    {
        return view('test2s.create');
    }

    /**
     * Store a newly created Test2 in storage.
     *
     * @param CreateTest2Request $request
     *
     * @return Response
     */
    public function store(CreateTest2Request $request)
    {
        $input = $request->all();

        $test2 = $this->test2Repository->create($input);

        Flash::success('Test2 saved successfully.');

        return redirect(route('test2s.index'));
    }

    /**
     * Display the specified Test2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $test2 = $this->test2Repository->find($id);

        if (empty($test2)) {
            Flash::error('Test2 not found');

            return redirect(route('test2s.index'));
        }

        return view('test2s.show')->with('test2', $test2);
    }

    /**
     * Show the form for editing the specified Test2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $test2 = $this->test2Repository->find($id);

        if (empty($test2)) {
            Flash::error('Test2 not found');

            return redirect(route('test2s.index'));
        }

        return view('test2s.edit')->with('test2', $test2);
    }

    /**
     * Update the specified Test2 in storage.
     *
     * @param int $id
     * @param UpdateTest2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateTest2Request $request)
    {
        $test2 = $this->test2Repository->find($id);

        if (empty($test2)) {
            Flash::error('Test2 not found');

            return redirect(route('test2s.index'));
        }

        $test2 = $this->test2Repository->update($request->all(), $id);

        Flash::success('Test2 updated successfully.');

        return redirect(route('test2s.index'));
    }

    /**
     * Remove the specified Test2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $test2 = $this->test2Repository->find($id);

        if (empty($test2)) {
            Flash::error('Test2 not found');

            return redirect(route('test2s.index'));
        }

        $this->test2Repository->delete($id);

        Flash::success('Test2 deleted successfully.');

        return redirect(route('test2s.index'));
    }
}
