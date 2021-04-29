<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRollRequest;
use App\Http\Requests\UpdateRollRequest;
use App\Repositories\RollRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RollController extends AppBaseController
{
    /** @var  RollRepository */
    private $rollRepository;

    public function __construct(RollRepository $rollRepo)
    {
        $this->rollRepository = $rollRepo;
    }

    /**
     * Display a listing of the Roll.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rolls = $this->rollRepository->all();

        return view('rolls.index')
            ->with('rolls', $rolls);
    }

    /**
     * Show the form for creating a new Roll.
     *
     * @return Response
     */
    public function create()
    {
        return view('rolls.create');
    }

    /**
     * Store a newly created Roll in storage.
     *
     * @param CreateRollRequest $request
     *
     * @return Response
     */
    public function store(CreateRollRequest $request)
    {
        $input = $request->all();

        $roll = $this->rollRepository->create($input);

        Flash::success('Roll saved successfully.');

        return redirect(route('rolls.index'));
    }

    /**
     * Display the specified Roll.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roll = $this->rollRepository->find($id);

        if (empty($roll)) {
            Flash::error('Roll not found');

            return redirect(route('rolls.index'));
        }

        return view('rolls.show')->with('roll', $roll);
    }

    /**
     * Show the form for editing the specified Roll.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roll = $this->rollRepository->find($id);

        if (empty($roll)) {
            Flash::error('Roll not found');

            return redirect(route('rolls.index'));
        }

        return view('rolls.edit')->with('roll', $roll);
    }

    /**
     * Update the specified Roll in storage.
     *
     * @param int $id
     * @param UpdateRollRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRollRequest $request)
    {
        $roll = $this->rollRepository->find($id);

        if (empty($roll)) {
            Flash::error('Roll not found');

            return redirect(route('rolls.index'));
        }

        $roll = $this->rollRepository->update($request->all(), $id);

        Flash::success('Roll updated successfully.');

        return redirect(route('rolls.index'));
    }

    /**
     * Remove the specified Roll from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roll = $this->rollRepository->find($id);

        if (empty($roll)) {
            Flash::error('Roll not found');

            return redirect(route('rolls.index'));
        }

        $this->rollRepository->delete($id);

        Flash::success('Roll deleted successfully.');

        return redirect(route('rolls.index'));
    }
}
