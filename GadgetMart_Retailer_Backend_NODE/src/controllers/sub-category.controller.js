const logger = require("../config/logger/logger");
const SubCategoryService = require('../services/sub-category.service')
const {BadRequest} = require('../utils/errors')
const Constants = require('../constants/constants')
const httpStatus = require('http-status')

const add = async (req, res, next) => {
    try {

        const body = req.body
        const data = await SubCategoryService.add(body)

        if (data != null) {
            let response = {
                message: Constants.customMessage.CREATED,
                data,
            }
            res.status(httpStatus.CREATED).send(response)
        } else {
            throw new BadRequest('Something Went Wrong')
        }
    } catch (error) {
        logger.error(error)
        next(error)
    }
}

const update = async (req, res, next) => {
    try {
        let id = req.param('id');
        let body = req.body
        let data = await SubCategoryService.update(body, id)

        if (data != null) {
            let response = {
                message: Constants.customMessage.SUCCESSFUL,
                data,
            }
            res.status(httpStatus.OK).send(response)
        } else {
            throw new BadRequest('Something Went Wrong')
        }

    } catch (error) {
        logger.error(error)
        next(error)
    }
}

const get = async (req, res, next) => {
    try {
        let id = req.param('id');
        let data = await SubCategoryService.findById(id)

        if (data != null) {
            let response = {
                message: Constants.customMessage.SUCCESSFUL,
                data,
            }
            res.status(httpStatus.OK).send(response)
        } else {
            throw new BadRequest('Cannot Find Category.')
        }

    } catch (error) {
        logger.error(error)
        next(error)
    }
}

const remove = async (req, res, next) => {
    try {
        let id = req.param('id');
        let data = await SubCategoryService.remove(id)

        if (data != null) {
            let response = {
                message: Constants.customMessage.REMOVED,
                data,
            }
            res.status(httpStatus.OK).send(response)
        } else {
            throw new BadRequest('Cannot Find Category.')
        }

    } catch (error) {
        logger.error(error)
        next(error)
    }
}

const getAll = async (req, res, next) => {
    try {
        let data = await SubCategoryService.getAll()

        if (data != null) {
            let response = {
                message: Constants.customMessage.SUCCESSFUL,
                data,
            }
            res.status(httpStatus.OK).send(response)
        } else {
            throw new BadRequest('Cannot Find Categories.')
        }

    } catch (error) {
        logger.error(error)
        next(error)
    }
}

const findByCategory = async (req, res, next) => {
    try {
        let id = req.param('id');
        let data = await SubCategoryService.findByCategory(id)

        if (data != null) {
            let response = {
                message: Constants.customMessage.SUCCESSFUL,
                data,
            }
            res.status(httpStatus.OK).send(response)
        } else {
            throw new BadRequest('Cannot Find Categories.')
        }

    } catch (error) {
        logger.error(error)
        next(error)
    }
}

module.exports = {
    add,
    get,
    getAll,
    remove,
    update,
    findByCategory,
}
