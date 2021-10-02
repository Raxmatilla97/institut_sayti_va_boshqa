<?php

namespace App\Http\Controllers\Prof;

use App\Http\Requests\Prof\CreateProfRequest;
use App\Http\Requests\Prof\UpdateProfRequest;
use App\Repositories\Prof\ProfRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProfController extends AppBaseController
{
    /** @var  ProfRepository */
    private $profRepository;

    public function __construct(ProfRepository $profRepo)
    {
        $this->profRepository = $profRepo;
    }

    /**
     * Display a listing of the Prof.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profs = $this->profRepository->paginate(10);

        return view('prof.profs.index')
            ->with('profs', $profs);
    }

    /**
     * Show the form for creating a new Prof.
     *
     * @return Response
     */
    public function create()
    {
        return view('prof.profs.create');
    }

    /**
     * Store a newly created Prof in storage.
     *
     * @param CreateProfRequest $request
     *
     * @return Response
     */
    public function store(CreateProfRequest $request)
    {
        $input = $request->all();

        $prof = $this->profRepository->create($input);

        Flash::success('Prof saved successfully.');

        return redirect(route('prof.profs.index'));
    }

    /**
     * Display the specified Prof.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prof = $this->profRepository->find($id);

        if (empty($prof)) {
            Flash::error('Prof not found');

            return redirect(route('prof.profs.index'));
        }

        return view('prof.profs.show')->with('prof', $prof);
    }

    /**
     * Show the form for editing the specified Prof.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prof = $this->profRepository->find($id);

        if (empty($prof)) {
            Flash::error('Prof not found');

            return redirect(route('prof.profs.index'));
        }

        return view('prof.profs.edit')->with('prof', $prof);
    }

    /**
     * Update the specified Prof in storage.
     *
     * @param int $id
     * @param UpdateProfRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfRequest $request)
    {
        $prof = $this->profRepository->find($id);

        if (empty($prof)) {
            Flash::error('Prof not found');

            return redirect(route('prof.profs.index'));
        }

        $prof = $this->profRepository->update($request->all(), $id);

        Flash::success('Prof updated successfully.');

        return redirect(route('prof.profs.index'));
    }

    /**
     * Remove the specified Prof from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prof = $this->profRepository->find($id);

        if (empty($prof)) {
            Flash::error('Prof not found');

            return redirect(route('prof.profs.index'));
        }

        $this->profRepository->delete($id);

        Flash::success('Prof deleted successfully.');

        return redirect(route('prof.profs.index'));
    }
}
