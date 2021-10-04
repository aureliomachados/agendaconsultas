<?php

namespace App\Http\Controllers;

use App\DataTables\ConsultaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateConsultaRequest;
use App\Http\Requests\UpdateConsultaRequest;
use App\Repositories\ConsultaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ConsultaController extends AppBaseController
{
    /** @var  ConsultaRepository */
    private $consultaRepository;

    public function __construct(ConsultaRepository $consultaRepo)
    {
        $this->consultaRepository = $consultaRepo;
    }

    /**
     * Display a listing of the Consulta.
     *
     * @param ConsultaDataTable $consultaDataTable
     * @return Response
     */
    public function index(ConsultaDataTable $consultaDataTable)
    {
        return $consultaDataTable->render('consultas.index');
    }

    /**
     * Show the form for creating a new Consulta.
     *
     * @return Response
     */
    public function create()
    {
        return view('consultas.create');
    }

    /**
     * Store a newly created Consulta in storage.
     *
     * @param CreateConsultaRequest $request
     *
     * @return Response
     */
    public function store(CreateConsultaRequest $request)
    {
        $input = $request->all();

        $consulta = $this->consultaRepository->create($input);

        Flash::success('Consulta salva com sucesso.');

        return redirect(route('consultas.index'));
    }

    /**
     * Display the specified Consulta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consulta = $this->consultaRepository->find($id);

        if (empty($consulta)) {
            Flash::error('Consulta not found');

            return redirect(route('consultas.index'));
        }

        return view('consultas.show')->with('consulta', $consulta);
    }

    /**
     * Show the form for editing the specified Consulta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consulta = $this->consultaRepository->find($id);

        if (empty($consulta)) {
            Flash::error('Consulta not found');

            return redirect(route('consultas.index'));
        }

        return view('consultas.edit')->with('consulta', $consulta);
    }

    /**
     * Update the specified Consulta in storage.
     *
     * @param  int              $id
     * @param UpdateConsultaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsultaRequest $request)
    {
        $consulta = $this->consultaRepository->find($id);

        if (empty($consulta)) {
            Flash::error('Consulta not found');

            return redirect(route('consultas.index'));
        }

        $consulta = $this->consultaRepository->update($request->all(), $id);

        Flash::success('Consulta updated successfully.');

        return redirect(route('consultas.index'));
    }

    /**
     * Remove the specified Consulta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consulta = $this->consultaRepository->find($id);

        if (empty($consulta)) {
            Flash::error('Consulta not found');

            return redirect(route('consultas.index'));
        }

        $this->consultaRepository->delete($id);

        Flash::success('Consulta deleted successfully.');

        return redirect(route('consultas.index'));
    }
}
