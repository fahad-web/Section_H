"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __param = (this && this.__param) || function (paramIndex, decorator) {
    return function (target, key) { decorator(target, key, paramIndex); }
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.TravelerControler = void 0;
const common_1 = require("@nestjs/common");
const admin_service_1 = require("./admin.service");
const admin_dto_1 = require("./admin.dto");
const platform_express_1 = require("@nestjs/platform-express");
const multer_1 = require("multer");
let TravelerControler = exports.TravelerControler = class TravelerControler {
    constructor(adminData) {
        this.adminData = adminData;
    }
    regAdmin(adminRegInfo) {
        return this.adminData.regAdmin(adminRegInfo);
    }
    logAdmin(adminlogInfo) {
        return this.adminData.logAdmin(adminlogInfo);
    }
    showManagerInfoId(id) {
        return this.adminData.showManagerInfoId(id);
    }
    showTravelerInfoId(id) {
        return this.adminData.showTravelerInfoId(id);
    }
    showTourGaid(id) {
        return this.adminData.showTourGaid(id);
    }
    delManagerById(id) {
        return this.adminData.delManagerById(id);
    }
    modifyAdminData(modifyadmin) {
        return this.adminData.modifyAdminData(modifyadmin);
    }
    uploadFile(myfileobj) {
        console.log(myfileobj);
        return ({ message: "file uploaded" });
    }
    getImages(name, res) {
        res.sendFile(name, { root: './uploads' });
    }
};
__decorate([
    (0, common_1.Post)('regtraveler'),
    (0, common_1.UsePipes)(new common_1.ValidationPipe()),
    __param(0, (0, common_1.Body)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [admin_dto_1.AdminDtoReg]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "regAdmin", null);
__decorate([
    (0, common_1.Post)('admlogin'),
    (0, common_1.UsePipes)(new common_1.ValidationPipe()),
    __param(0, (0, common_1.Body)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [admin_dto_1.AdminLogin]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "logAdmin", null);
__decorate([
    (0, common_1.Get)('managerinfo/:id'),
    __param(0, (0, common_1.Param)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Number]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "showManagerInfoId", null);
__decorate([
    (0, common_1.Get)('Tarvelerinfo/:id'),
    __param(0, (0, common_1.Param)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Number]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "showTravelerInfoId", null);
__decorate([
    (0, common_1.Get)('tourgaid/:id'),
    __param(0, (0, common_1.Param)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Number]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "showTourGaid", null);
__decorate([
    (0, common_1.Delete)('deletemanager/:id'),
    __param(0, (0, common_1.Param)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Number]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "delManagerById", null);
__decorate([
    (0, common_1.Put)('modifyadmindata'),
    (0, common_1.UsePipes)(new common_1.ValidationPipe),
    __param(0, (0, common_1.Body)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [admin_dto_1.AdminModifyDto]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "modifyAdminData", null);
__decorate([
    (0, common_1.Post)(('/upload')),
    (0, common_1.UseInterceptors)((0, platform_express_1.FileInterceptor)('myfile', { fileFilter: (req, file, cb) => {
            if (file.originalname.match(/^.*\.(jpg|webp|png|jpeg)$/))
                cb(null, true);
            else {
                cb(new multer_1.MulterError('LIMIT_UNEXPECTED_FILE', 'image'), false);
            }
        },
        limits: { fileSize: 30000 },
        storage: (0, multer_1.diskStorage)({
            destination: './uploads',
            filename: function (req, file, cb) {
                cb(null, Date.now() + file.originalname);
            },
        })
    })),
    __param(0, (0, common_1.UploadedFile)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object]),
    __metadata("design:returntype", Object)
], TravelerControler.prototype, "uploadFile", null);
__decorate([
    (0, common_1.Get)('/getimage/:name'),
    __param(0, (0, common_1.Param)('name')),
    __param(1, (0, common_1.Res)()),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [Object, Object]),
    __metadata("design:returntype", void 0)
], TravelerControler.prototype, "getImages", null);
exports.TravelerControler = TravelerControler = __decorate([
    (0, common_1.Controller)('admin'),
    __metadata("design:paramtypes", [admin_service_1.AdminService])
], TravelerControler);
//# sourceMappingURL=admin.controler.js.map