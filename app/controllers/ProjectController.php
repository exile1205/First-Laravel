<?php

class ProjectController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function getIndex()
    {
        $projects = Project::all();
        return View::make('test', compact('projects'));
    }
    public function postIndex()
    {
        $project = new Project;
        $project->project_name     = Input::get('project_name');
        $project->project_description    = Input::get('project_description');
        $project->save();

        $projects = Project::all();

        return View::make('test', compact('projects'));
    }

}